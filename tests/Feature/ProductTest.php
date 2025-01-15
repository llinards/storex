<?php

//it('shows product related to category', function () {
//    $category = '';
//    Storage::fake('local');
//    $category = Category::factory()->create([
//        Product::factory()->count(1)->create([
//            'category_id' => $category->id,
//        ]),
//    ]);
//    $response = $this->get(route('category.show', ['lv', $category->slug]));
//    $response->assertStatus(200)->assertSee($category->title);
//});
