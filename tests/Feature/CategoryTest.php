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
    $this->get(route('category.show', ['lv', $category->slug]))
        ->assertStatus(200)
        ->assertSee($category->name)
        ->assertSee($product->name);
});
