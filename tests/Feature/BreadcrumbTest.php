<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Storage;

it('renders breadcrumbs on the products index page', function () {
    Storage::fake('local');
    $product = Product::factory()->create(['category_id' => Category::factory()->create()->id]);
    ProductImage::factory()->create(['product_id' => $product->id]);

    $this->get(route('category.index'))
        ->assertSuccessful()
        ->assertSee('Sākums')
        ->assertSee('Tenta angāru veidi');
});

it('renders breadcrumbs on the category page', function () {
    Storage::fake('local');
    $category = Category::factory()->create();
    $product = Product::factory()->create(['category_id' => $category->id]);
    ProductImage::factory()->create(['product_id' => $product->id]);

    $this->get(route('category.show', $category->slug))
        ->assertSuccessful()
        ->assertSee('Sākums')
        ->assertSee('Tenta angāru veidi')
        ->assertSee($category->title);
});

it('renders breadcrumbs on the accessories page', function () {
    Storage::fake('local');
    $category = Category::factory()->create(['is_accessory' => true]);
    $product = Product::factory()->create(['category_id' => $category->id]);
    ProductImage::factory()->create(['product_id' => $product->id]);

    $this->get(route('category.show', $category->slug))
        ->assertSuccessful()
        ->assertSee('Sākums')
        ->assertSee('Tenta angāru veidi')
        ->assertSee($category->title);
});

it('renders breadcrumbs on the product page', function () {
    Storage::fake('local');
    $category = Category::factory()->create();
    $product = Product::factory()->create(['category_id' => $category->id]);
    ProductImage::factory()->create(['product_id' => $product->id]);

    $this->get(route('product.show', [$category->slug, $product->slug]))
        ->assertSuccessful()
        ->assertSee('Sākums')
        ->assertSee('Tenta angāru veidi')
        ->assertSee($category->title)
        ->assertSee($product->title);
});
