<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Storage;

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
