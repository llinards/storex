<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductVariant;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

beforeEach(function () {
    $this->user = User::factory()->create();
});

it('returns a page with all products', function () {
    Storage::fake('local');
    $category = Category::factory()->create();
    $product = Product::factory()->create(['category_id' => $category->id]);
    ProductImage::factory()->create(['product_id' => $product->id]);
    $this->get(route('category.index'))
        ->assertStatus(200)
        ->assertSee($category->name)
        ->assertSee($product->name);
});

it('returns a detailed page of product', function () {
    Storage::fake('local');
    $category = Category::factory()->create();
    $product = Product::factory()->create(['category_id' => $category->id]);
    ProductImage::factory(1)->create(['product_id' => $product->id]);
    $productVariant = ProductVariant::factory(1)->create(['product_id' => $product->id]);
    $this->get(route('product.show', [$category->slug, $product->slug]))
        ->assertStatus(200)
        ->assertSee($category->name)
        ->assertSee($product->name)
        ->assertSee($productVariant->first()->title);
});

it('returns 404 when product does not exist', function () {
    $category = Category::factory()->create();
    $this->get(route('product.show', [$category->slug, 'nonexistent-product']))
        ->assertStatus(404);
});

it('returns 404 when category does not exist', function () {
    $this->get(route('product.show', ['nonexistent-category', 'nonexistent-product']))
        ->assertStatus(404);
});

it('shows products only when they are active', function () {
    Storage::fake('local');
    $category = Category::factory()->create();
    $activeProduct = Product::factory()->create(['category_id' => $category->id, 'is_available' => true]);
    $inactiveProduct = Product::factory()->create(['category_id' => $category->id, 'is_available' => false]);
    ProductImage::factory()->create(['product_id' => $activeProduct->id]);
    ProductImage::factory()->create(['product_id' => $inactiveProduct->id]);

    $this->get(route('category.index'))
        ->assertStatus(200)
        ->assertSee($activeProduct->name)
        ->assertDontSee($inactiveProduct->name);
});

it('displays multiple product images on product detail page', function () {
    Storage::fake('local');
    $category = Category::factory()->create();
    $product = Product::factory()->create(['category_id' => $category->id]);
    ProductImage::factory(3)->create(['product_id' => $product->id]);

    $response = $this->get(route('product.show', [$category->slug, $product->slug]));
    $response->assertStatus(200);

    $product->images->each(function ($image) use ($response) {
        $response->assertSee($image->image_path);
    });
});

it('displays multiple product variants on product detail page', function () {
    Storage::fake('local');
    $category = Category::factory()->create();
    $product = Product::factory()->create(['category_id' => $category->id]);
    ProductImage::factory()->create(['product_id' => $product->id]);
    $variants = ProductVariant::factory(3)->create(['product_id' => $product->id]);

    $response = $this->get(route('product.show', [$category->slug, $product->slug]));
    $response->assertStatus(200);

    $variants->each(function ($variant) use ($response) {
        $response->assertSee($variant->title);
    });
});

// Admin CRUD Tests

it('requires authentication to access admin product create page', function () {
    $this->get(route('admin.product.create'))
        ->assertRedirect(route('login'));
});

it('shows product create form when authenticated', function () {
    $this->actingAs($this->user)
        ->get(route('admin.product.create'))
        ->assertStatus(200)
        ->assertViewIs('admin.products.create');
});

it('creates a new product with valid data', function () {
    Storage::fake('public');

    $category = Category::factory()->create();
    $file = UploadedFile::fake()->image('product.jpg');

    Storage::disk('public')->put('uploads/'.$file->hashName(), 'image content');

    $productData = [
        'category_id' => $category->id,
        'product_title' => 'Test Product',
        'product_description' => 'This is a test product description',
        'product_price' => 99.99,
        'available_area' => '50m²',
        'available_width' => '5m',
        'available_height' => '3m',
        'available_length' => '10m',
        'product_images' => ['uploads/'.$file->hashName()],
        'product_variant' => null,
        'is_available' => 'on',
    ];

    $this->actingAs($this->user)
        ->post(route('admin.product.store'), $productData)
        ->assertRedirect(route('admin.index'))
        ->assertSessionHas('success', 'Produkts izveidots!');

    $product = Product::latest()->first();
    expect($product->getTranslation('title', 'lv'))->toBe('Test Product');
    expect($product->getTranslation('description', 'lv'))->toBe('This is a test product description');
    expect($product->price)->toBe(99.99);
    expect((bool) $product->is_available)->toBe(true);
});

it('validates required fields', function (string $field, mixed $value) {
    $category = Category::factory()->create();

    $productData = [
        'category_id' => $category->id,
        'product_title' => 'Test Product',
        'product_description' => 'Description',
        'product_images' => [],
        $field => $value,
    ];

    $this->actingAs($this->user)
        ->post(route('admin.product.store'), $productData)
        ->assertSessionHasErrors([$field]);
})->with([
    'empty title' => ['product_title', ''],
    'empty description' => ['product_description', ''],
    'empty category' => ['category_id', ''],
    'non-existent category' => ['category_id', 9999],
    'title too long' => ['product_title', str_repeat('A', 256)],
    'non-numeric price' => ['product_price', 'not-a-number'],
    'negative price' => ['product_price', -10],
]);

it('shows admin product detail page', function () {
    $category = Category::factory()->create();
    $product = Product::factory()->create(['category_id' => $category->id]);

    $this->actingAs($this->user)
        ->get(route('admin.product.show', $product->id))
        ->assertStatus(200)
        ->assertViewIs('admin.products.show')
        ->assertViewHas('product');
});

it('returns 404 when trying to show non-existent admin product', function () {
    $this->actingAs($this->user)
        ->get(route('admin.product.show', 999))
        ->assertStatus(404);
});

it('updates product with valid data', function () {
    Storage::fake('public');

    $category = Category::factory()->create();
    $product = Product::factory()->create([
        'category_id' => $category->id,
        'title' => ['lv' => 'Old Title'],
    ]);

    $updateData = [
        'category_id' => $category->id,
        'product_title' => 'Updated Product',
        'product_description' => 'Updated description',
        'product_price' => 199.99,
        'available_area' => '75m²',
        'product_images' => [],
        'product_variant' => null,
        'is_featured' => 'on',
        'is_available' => 'on',
    ];

    $this->actingAs($this->user)
        ->put(route('admin.product.update', $product->id), $updateData)
        ->assertRedirect(route('admin.index'))
        ->assertSessionHas('success', 'Produkts atjaunots!');

    $product->refresh();

    expect($product->getTranslation('title', 'lv'))->toBe('Updated Product');
    expect($product->getTranslation('description', 'lv'))->toBe('Updated description');
    expect($product->price)->toBe(199.99);
});

it('update validation fails with empty title', function () {
    $category = Category::factory()->create();
    $product = Product::factory()->create(['category_id' => $category->id]);

    $updateData = [
        'category_id' => $category->id,
        'product_title' => '',
        'product_description' => 'Updated description',
        'product_images' => [],
    ];

    $this->actingAs($this->user)
        ->put(route('admin.product.update', $product->id), $updateData)
        ->assertSessionHasErrors(['product_title']);
});

it('deletes product successfully', function () {
    Storage::fake('public');

    $category = Category::factory()->create();
    $product = Product::factory()->create(['category_id' => $category->id]);

    $this->actingAs($this->user)
        ->delete(route('admin.product.destroy', $product->id))
        ->assertRedirect()
        ->assertSessionHas('success', 'Produkts izdzēsts!');

    $this->assertDatabaseMissing('products', [
        'id' => $product->id,
    ]);
});

it('deletes product variant successfully', function () {
    $category = Category::factory()->create();
    $product = Product::factory()->create(['category_id' => $category->id]);
    $variant = ProductVariant::factory()->create(['product_id' => $product->id]);

    $this->actingAs($this->user)
        ->get(route('admin.product-variant.destroy', $variant->id))
        ->assertRedirect()
        ->assertSessionHas('success', 'Produkta variants izdzēsts!');

    $this->assertDatabaseMissing('product_variants', [
        'id' => $variant->id,
    ]);
});

it('handles product creation error gracefully', function () {
    Storage::fake('public');

    $this->mock(\App\Services\ProductServices::class)
        ->shouldReceive('storeProduct')
        ->andThrow(new \Exception('Database error'));

    $category = Category::factory()->create();

    $productData = [
        'category_id' => $category->id,
        'product_title' => 'Test Product',
        'product_description' => 'This is a test product description',
        'product_images' => [],
    ];

    $this->actingAs($this->user)
        ->post(route('admin.product.store'), $productData)
        ->assertRedirect()
        ->assertSessionHas('error', 'Produkts netika izveidots!');
});

it('handles product update error gracefully', function () {
    $category = Category::factory()->create();
    $product = Product::factory()->create(['category_id' => $category->id]);

    $this->mock(\App\Services\ProductServices::class)
        ->shouldReceive('updateProduct')
        ->andThrow(new \Exception('Database error'));

    $updateData = [
        'category_id' => $category->id,
        'product_title' => 'Updated Product',
        'product_description' => 'Updated description',
        'product_images' => [],
    ];

    $this->actingAs($this->user)
        ->put(route('admin.product.update', $product->id), $updateData)
        ->assertRedirect()
        ->assertSessionHas('error', 'Produkts netika atjaunots!');
});

it('handles product deletion error gracefully', function () {
    $category = Category::factory()->create();
    $product = Product::factory()->create(['category_id' => $category->id]);

    $this->mock(\App\Services\ProductServices::class)
        ->shouldReceive('destroyProduct')
        ->andThrow(new \Exception('Database error'));

    $this->actingAs($this->user)
        ->delete(route('admin.product.destroy', $product->id))
        ->assertRedirect()
        ->assertSessionHas('error', 'Produkts netika izdzēsts!');
});

it('creates product with variants', function () {
    Storage::fake('public');

    $category = Category::factory()->create();

    $productData = [
        'category_id' => $category->id,
        'product_title' => 'Product With Variants',
        'product_description' => 'Description',
        'product_images' => [],
        'product_variant' => [
            [
                'title' => 'Small',
                'price' => 99.99,
                'length' => 5,
                'width' => 3,
                'height' => 2,
                'gate_size' => '2x2',
                'area' => 15,
            ],
            [
                'title' => 'Large',
                'price' => 199.99,
                'length' => 10,
                'width' => 6,
                'height' => 4,
                'gate_size' => '4x4',
                'area' => 60,
            ],
        ],
        'is_available' => 'on',
    ];

    $this->actingAs($this->user)
        ->post(route('admin.product.store'), $productData)
        ->assertRedirect(route('admin.index'))
        ->assertSessionHas('success');

    $product = Product::latest()->first();
    expect($product->variants)->toHaveCount(2);
});

it('works with different locales for products', function () {
    $this->refreshApplicationWithLocale('en');

    Storage::fake('public');

    $category = Category::factory()->create();

    $productData = [
        'category_id' => $category->id,
        'product_title' => 'English Product',
        'product_description' => 'This is an English product description',
        'product_images' => [],
        'product_variant' => null,
    ];

    $this->actingAs($this->user)
        ->post(route('admin.product.store'), $productData)
        ->assertRedirect(route('admin.index'))
        ->assertSessionHas('success');

    $product = Product::latest()->first();
    expect($product->getTranslation('title', 'en'))->toBe('English Product');
    expect($product->getTranslation('description', 'en'))->toBe('This is an English product description');
});
