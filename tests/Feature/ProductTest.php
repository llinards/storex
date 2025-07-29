<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\Storage;

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
