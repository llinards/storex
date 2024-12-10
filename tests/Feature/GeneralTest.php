<?php

use App\Models\Category;
use App\Models\CategoryTranslation;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('returns a successful response', function () {
    $response = $this->get('/lv');

    $response->assertStatus(200);
});

it('redirects to the default locale', function () {
    $response = $this->get('/');

    $response->assertRedirect('/lv');
});

it('shows the category page for a valid locale and slug', function () {
    $category = Category::factory()->create();

    CategoryTranslation::factory()->create([
        'category_id' => $category->id,
        'locale'      => 'lv',
        'slug'        => 'test-slug',
    ]);


    $response = $this->get('/lv/test-slug');

    $response->assertStatus(200);
});

it('returns 404 for an invalid slug', function () {
    $response = $this->get('/lv/invalid-slug');

    $response->assertStatus(404);
});

it('returns 404 for an invalid locale', function () {
    $category = Category::factory()->create();
    CategoryTranslation::factory()->create([
        'category_id' => $category->id,
        'locale'      => 'lv',
        'slug'        => 'test-slug-2',
    ]);

    $response = $this->get('/invalid-locale/test-slug-2');

    $response->assertStatus(404);
});
