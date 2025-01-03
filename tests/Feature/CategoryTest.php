<?php

use App\Models\Category;
use App\Models\CategoryTranslation;

it('shows the category page for a valid locale and matching category locale', function () {
    $category    = Category::factory()->create();
    $translation = CategoryTranslation::factory()->create([
        'category_id' => $category->id,
        'locale'      => 'lv',
        'slug'        => 'test-slug',
    ]);

    $response = $this->get('/lv/test-slug');

    $response->assertStatus(200);
    $response->assertSee($translation->title);
});

it('returns 404 when category locale does not match the route locale', function () {
    $category = Category::factory()->create();
    CategoryTranslation::factory()->create([
        'category_id' => $category->id,
        'locale'      => 'en',
        'slug'        => 'test-slug',
    ]);

    $response = $this->get('/lv/test-slug');

    $response->assertStatus(404);
});

it('returns 404 for a valid locale but non-existent category slug', function () {
    $response = $this->get('/lv/non-existent-slug');

    $response->assertStatus(404);
});
