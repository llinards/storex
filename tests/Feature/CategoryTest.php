<?php
//
//use App\Models\Category;
//use App\Models\Product;
//use Illuminate\Support\Facades\Storage;
//
//it('shows categories page for a valid locale and matching category locale (LV)', function () {
//    Storage::fake('local');
//    $category = Category::factory()->create();
//    $product  = Product::factory()->create(['category_id' => $category->id]);
//    $response = $this->get(route('category.index', 'lv'));
//    $response->assertStatus(200)->assertSee($product->title);
//});
//
//it('shows categories page for a valid locale and matching category locale (EN)', function () {
//    Storage::fake('local');
//    $category = Category::factory()->create();
//    $response = $this->get(route('category.index', 'en'));
//    $response->assertStatus(200)->assertSee($category->title);
//});
//
//it('returns to default locale if categories doesnt have a translation', function () {
//    Storage::fake('local');
//    Category::factory()->create([
//        'title'       => ['lv' => 'Latvian title'],
//        'slug'        => ['lv' => 'latvian-slug'],
//        'description' => ['lv' => 'Latvian description'],
//    ]);
//    $response = $this->get(route('category.index', 'en'));
//    $response->assertStatus(200)->assertSee('Latvian title');
//});
//
//it('shows the category page for a valid locale and matching category locale (LV)', function () {
//    Storage::fake('local');
//    $category = Category::factory()->create();
//    $response = $this->get(route('category.show', ['lv', $category->slug]));
//    $response->assertStatus(200)->assertSee($category->title);
//});
//
//it('shows the category page for a valid locale and matching category locale (EN)', function () {
//    Storage::fake('local');
//    $category = Category::factory()->create();
//    $response = $this->get(route('category.show', ['en', $category->slug]));
//    $response->assertStatus(200)->assertSee($category->title);
//});
//
//it('returns to default locale if category doesnt have a translation', function () {
//    Storage::fake('local');
//    Category::factory()->create([
//        'title'       => ['lv' => 'Latvian title'],
//        'slug'        => ['lv' => 'latvian-slug'],
//        'description' => ['lv' => 'Latvian description'],
//    ]);
//    $response = $this->get(route('category.show', ['en', 'latvian-slug']));
//    $response->assertStatus(200)->assertSee('Latvian title');
//});
//
//it('returns 404 if not matching category was found', function () {
//    $response = $this->get(route('category.show', ['lv', 'non-existing-slug']));
//    $response->assertStatus(404);
//});
