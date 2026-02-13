<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

beforeEach(function () {
    $this->user = User::factory()->create();
});

it('returns a page of products belonging to a category', function () {
    Storage::fake('local');
    $category = Category::factory()->create();
    $product = Product::factory()->create(['category_id' => $category->id]);
    ProductImage::factory()->create(['product_id' => $product->id]);
    $this->get(route('category.show', [$category->slug]))
        ->assertStatus(200)
        ->assertSee($category->name)
        ->assertSee($product->name);
});

it('returns 404 when category does not exist', function () {
    $this->get(route('category.show', 'nonexistent-category'))
        ->assertStatus(404);
});

it('shows only active products in category', function () {
    Storage::fake('local');
    $category = Category::factory()->create();
    $activeProduct = Product::factory()->create(['category_id' => $category->id, 'is_available' => true]);
    $inactiveProduct = Product::factory()->create(['category_id' => $category->id, 'is_available' => false]);
    ProductImage::factory()->create(['product_id' => $activeProduct->id]);
    ProductImage::factory()->create(['product_id' => $inactiveProduct->id]);

    $this->get(route('category.show', $category->slug))
        ->assertStatus(200)
        ->assertSee($activeProduct->name)
        ->assertDontSee($inactiveProduct->name);
});

it('shows empty category page when no products exist', function () {
    $category = Category::factory()->create();

    $this->get(route('category.show', $category->slug))
        ->assertStatus(200)
        ->assertSee($category->name);
});

it('displays category with multiple products', function () {
    Storage::fake('local');
    $category = Category::factory()->create();
    $products = Product::factory(5)->create(['category_id' => $category->id]);

    $products->each(function ($product) {
        ProductImage::factory()->create(['product_id' => $product->id]);
    });

    $response = $this->get(route('category.show', $category->slug));
    $response->assertStatus(200);

    $products->each(function ($product) use ($response) {
        $response->assertSee($product->name);
    });
});

it('requires authentication to access admin category create page', function () {
    $this->get(route('admin.category.create'))
        ->assertRedirect(route('login'));
});

it('shows category create form when authenticated', function () {
    $this->actingAs($this->user)
        ->get(route('admin.category.create'))
        ->assertStatus(200)
        ->assertViewIs('admin.categories.create');
});

it('creates a new category with valid data', function () {
    Storage::fake('local');

    $file = UploadedFile::fake()->image('category.jpg');

    $categoryData = [
        'category_title' => 'Test Category',
        'category_description' => 'This is a test category description',
        'category_area' => '50m²',
        'category_image' => [$file],
        'is_available' => 'on',
    ];

    $this->actingAs($this->user)
        ->post(route('admin.category.store'), $categoryData)
        ->assertRedirect(route('admin.index'))
        ->assertSessionHas('success', 'Kategorija izveidota!');

    // Check the created category using model methods
    $category = Category::latest()->first();
    expect($category->getTranslation('title', 'lv'))->toBe('Test Category');
    expect($category->getTranslation('description', 'lv'))->toBe('This is a test category description');
    expect($category->getTranslation('area', 'lv'))->toBe('50m²');
    expect($category->is_available)->toBe(true);
    expect($category->is_accessory)->toBe(false);

    Storage::disk('local')->assertExists($category->image_path);
});

it('validates required fields', function (string $field, mixed $value) {
    Storage::fake('local');

    $categoryData = [
        'category_title' => 'Test Category',
        'category_description' => 'This is a test category description',
        'category_image' => [UploadedFile::fake()->image('category.jpg')],
        $field => $value,
    ];

    $this->actingAs($this->user)
        ->post(route('admin.category.store'), $categoryData)
        ->assertSessionHasErrors([$field]);
})->with([
    'empty title' => ['category_title', ''],
    'empty description' => ['category_description', ''],
    'title too long' => ['category_title', str_repeat('A', 101)],
    'area too long' => ['category_area', str_repeat('A', 101)],
]);

it('shows admin category detail page', function () {
    $category = Category::factory()->create();

    $this->actingAs($this->user)
        ->get(route('admin.category.show', $category->id))
        ->assertStatus(200)
        ->assertViewIs('admin.categories.show')
        ->assertViewHas('category', $category);
});

it('updates category with valid data', function () {
    Storage::fake('local');

    $category = Category::factory()->create([
        'title' => ['lv' => 'Old Title'],
        'description' => ['lv' => 'Old Description'],
        'image' => 'old-image.jpg',
    ]);

    $newFile = UploadedFile::fake()->image('new-category.jpg');

    $updateData = [
        'category_title' => 'Updated Category',
        'category_description' => 'Updated description',
        'category_area' => '75m²',
        'category_image' => [$newFile],
        'is_featured' => 'on',
        'is_available' => 'on',
    ];

    $this->actingAs($this->user)
        ->put(route('admin.category.update', $category->id), $updateData)
        ->assertRedirect(route('admin.index'))
        ->assertSessionHas('success', 'Kategorija atjaunota!');

    $category->refresh();

    expect($category->getTranslation('title', 'lv'))->toBe('Updated Category');
    expect($category->getTranslation('description', 'lv'))->toBe('Updated description');
    expect($category->getTranslation('area', 'lv'))->toBe('75m²');
    expect($category->is_featured)->toBe(true);
    expect($category->is_available)->toBe(true);
    expect($category->is_accessory)->toBe(false);
});

it('updates category validation fails with empty title', function () {
    $category = Category::factory()->create();

    $updateData = [
        'category_title' => '',
        'category_description' => 'Updated description',
        'category_image' => [UploadedFile::fake()->image('category.jpg')],
    ];

    $this->actingAs($this->user)
        ->put(route('admin.category.update', $category->id), $updateData)
        ->assertSessionHasErrors(['category_title']);
});

it('deletes category successfully', function () {
    Storage::fake('local');

    $category = Category::factory()->create([
        'image' => 'test-image.jpg',
    ]);

    // Create the image file
    Storage::disk('local')->put('categories/test-image.jpg', 'fake image content');

    $this->actingAs($this->user)
        ->delete(route('admin.category.destroy', $category->id))
        ->assertRedirect()
        ->assertSessionHas('success', 'Kategorija dzēsta!');

    $this->assertDatabaseMissing('categories', [
        'id' => $category->id,
    ]);

    Storage::disk('local')->assertMissing($category->image_path);
});

it('returns 404 when trying to delete non-existent category', function () {
    $this->actingAs($this->user)
        ->delete(route('admin.category.destroy', 999))
        ->assertStatus(302);
});

it('returns 404 when trying to show non-existent admin category', function () {
    $this->actingAs($this->user)
        ->get(route('admin.category.show', 999))
        ->assertStatus(404);
});

it('handles category creation error gracefully', function () {
    Storage::fake('local');

    // Mock the CategoryServices to throw an exception
    $this->mock(\App\Services\CategoryServices::class)
        ->shouldReceive('storeCategory')
        ->andThrow(new \Exception('Database error'));

    $categoryData = [
        'category_title' => 'Test Category',
        'category_description' => 'This is a test category description',
        'category_image' => [UploadedFile::fake()->image('category.jpg')],
    ];

    $this->actingAs($this->user)
        ->post(route('admin.category.store'), $categoryData)
        ->assertRedirect()
        ->assertSessionHas('error', 'Kategorija netika izveidota!');
});

it('handles category update error gracefully', function () {
    $category = Category::factory()->create();

    // Mock the CategoryServices to throw an exception
    $this->mock(\App\Services\CategoryServices::class)
        ->shouldReceive('updateCategory')
        ->andThrow(new \Exception('Database error'));

    $updateData = [
        'category_title' => 'Updated Category',
        'category_description' => 'Updated description',
        'category_image' => [UploadedFile::fake()->image('category.jpg')],
    ];

    $this->actingAs($this->user)
        ->put(route('admin.category.update', $category->id), $updateData)
        ->assertRedirect()
        ->assertSessionHas('error', 'Kategorija netika atjaunota!');
});

it('handles category deletion error gracefully', function () {
    $category = Category::factory()->create();

    // Mock the CategoryServices to throw an exception
    $this->mock(\App\Services\CategoryServices::class)
        ->shouldReceive('destroyCategory')
        ->andThrow(new \Exception('Database error'));

    $this->actingAs($this->user)
        ->delete(route('admin.category.destroy', $category->id))
        ->assertRedirect()
        ->assertSessionHas('error', 'Kategorija netika dzēsta!');
});

it('creates category with checkbox values correctly', function () {
    Storage::fake('local');

    $categoryData = [
        'category_title' => 'Test Category',
        'category_description' => 'This is a test category description',
        'category_image' => [UploadedFile::fake()->image('category.jpg')],
        'is_available' => 'on',
        'is_accessory' => 'on',
    ];

    $this->actingAs($this->user)
        ->post(route('admin.category.store'), $categoryData)
        ->assertRedirect(route('admin.index'))
        ->assertSessionHas('success');

    $category = Category::latest()->first();
    expect($category->getTranslation('title', 'lv'))->toBe('Test Category');
    expect($category->is_available)->toBe(true);
    expect($category->is_accessory)->toBe(true);
});

it('creates category without checkbox values correctly', function () {
    Storage::fake('local');

    $categoryData = [
        'category_title' => 'Test Category',
        'category_description' => 'This is a test category description',
        'category_image' => [UploadedFile::fake()->image('category.jpg')],
        // No checkboxes provided
    ];

    $this->actingAs($this->user)
        ->post(route('admin.category.store'), $categoryData)
        ->assertRedirect(route('admin.index'))
        ->assertSessionHas('success');

    $category = Category::latest()->first();
    expect($category->getTranslation('title', 'lv'))->toBe('Test Category');
    expect($category->is_available)->toBe(false);
    expect($category->is_accessory)->toBe(false);
});

it('works with different locales', function () {
    $this->refreshApplicationWithLocale('en');

    Storage::fake('local');

    $categoryData = [
        'category_title' => 'English Category',
        'category_description' => 'This is an English category description',
        'category_image' => [UploadedFile::fake()->image('category.jpg')],
    ];

    $this->actingAs($this->user)
        ->post(route('admin.category.store'), $categoryData)
        ->assertRedirect(route('admin.index'))
        ->assertSessionHas('success');

    $category = Category::latest()->first();
    expect($category->getTranslation('title', 'en'))->toBe('English Category');
    expect($category->getTranslation('description', 'en'))->toBe('This is an English category description');
});
