<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Storage;

it('returns a successful response', fn() => $this->get('/lv')->assertStatus(200));

it('redirects to the default locale', fn() => $this->get('/')->assertRedirect('/lv'));

it('returns a page with all products', function () {
    $category = Category::factory()->create();
    $product  = Product::factory()->create(['category_id' => $category->id]);
    ProductImage::factory()->create(['product_id' => $product->id]);
    $this->get(route('category.index', 'lv'))
         ->assertStatus(200)
         ->assertSee($category->name)
         ->assertSee($product->name);
});

it('returns a page of products belonging to a category', function () {
    Storage::fake('local');
    $category = Category::factory()->create();
    $product  = Product::factory()->create(['category_id' => $category->id]);
    ProductImage::factory()->create(['product_id' => $product->id]);
    $this->get(route('category.show', ['lv', $category->slug]))
         ->assertStatus(200)
         ->assertSee($category->name)
         ->assertSee($product->name);
});

it('returns a detailed page of product', function () {
    Storage::fake('local');
    $category = Category::factory()->create();
    $product  = Product::factory()->create(['category_id' => $category->id]);
    ProductImage::factory(1)->create(['product_id' => $product->id]);
    $this->get(route('product.show', ['lv', $category->slug, $product->slug]))
         ->assertStatus(200)
         ->assertSee($category->name)
         ->assertSee($product->name);
});

it('returns a page with a pricelist', fn() => $this->get(route('pricelist', 'lv'))->assertStatus(200));

it('returns a faq page', fn() => $this->get(route('faq', 'lv'))->assertStatus(200));

it('returns a contact us page', fn() => $this->get(route('contacts', 'lv'))->assertStatus(200));

it('returns an about us page', fn() => $this->get(route('about', 'lv'))->assertStatus(200));

it('returns a privacy policy page', fn() => $this->get(route('privacy-policy', 'lv'))->assertStatus(200));
