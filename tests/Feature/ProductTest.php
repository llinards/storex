<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\Storage;

it('returns a page with all products', function () {
    Storage::fake('local');
    $category = Category::factory()->create();
    $product  = Product::factory()->create(['category_id' => $category->id]);
    ProductImage::factory()->create(['product_id' => $product->id]);
    $this->get(route('category.index'))
         ->assertStatus(200)
         ->assertSee($category->name)
         ->assertSee($product->name);
});

it('returns a detailed page of product', function () {
    Storage::fake('local');
    $category = Category::factory()->create();
    $product  = Product::factory()->create(['category_id' => $category->id]);
    ProductImage::factory(1)->create(['product_id' => $product->id]);
    $productVariant = ProductVariant::factory(1)->create(['product_id' => $product->id]);
    $this->get(route('product.show', [$category->slug, $product->slug]))
         ->assertStatus(200)
         ->assertSee($category->name)
         ->assertSee($product->name)
         ->assertSee($productVariant->first()->title);
});
