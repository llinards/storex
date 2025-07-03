<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Services\FileServices;
use App\Services\ProductServices;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

beforeEach(function () {
    $this->user = User::factory()->create();
    $this->actingAs($this->user);
    Storage::fake('local');
});

describe('Admin Product Creation - Authentication', function () {
    it('redirects unauthenticated users to login', function () {
        auth()->logout();

        $response = $this->get(route('admin.product.create'));

        $response->assertRedirect('/login');
    });

    it('allows authenticated users to access product creation page', function () {
        $response = $this->get(route('admin.product.create'));

        $response->assertStatus(200);
        $response->assertViewIs('admin.products.create');
    });
});

describe('Admin Product Creation - Form Display', function () {
    it('displays product creation form with categories', function () {
        $categories = Category::factory(3)->create(['is_available' => true]);

        $response = $this->get(route('admin.product.create'));

        $response->assertStatus(200)
                 ->assertViewHas('categories');

        $categories->each(function ($category) use ($response) {
            $response->assertSee($category->name);
        });
    });

    it('only displays active categories in creation form', function () {
        $activeCategory   = Category::factory()->create(['is_available' => true]);
        $inactiveCategory = Category::factory()->create(['is_available' => false]);

        $response = $this->get(route('admin.product.create'));

        $response->assertStatus(200)
                 ->assertSee($activeCategory->name)
                 ->assertDontSee($inactiveCategory->name);
    });
});

describe('Admin Product Creation - Successful Creation', function () {
    it('creates product with valid data successfully', function () {
        $category    = Category::factory()->create();
        $productData = [
            'product_title'           => 'Test Product',
            'product_description'     => 'Test Description',
            'product_additional_info' => 'Additional Info',
            'available_area'          => '100 sqm',
            'available_width'         => '10m',
            'available_height'        => '3m',
            'available_length'        => '10m',
            'category_id'             => $category->id,
            'product_price'           => 1500.50,
            'is_featured'             => true,
            'is_available'            => true,
            'product_images'          => [],
            'product_variant'         => [],
        ];

        $response = $this->post(route('admin.product.store'), $productData);

        $response->assertRedirect(route('admin.index'))
                 ->assertSessionHas('success', 'Produkts izveidots!');

        $this->assertDatabaseHas('products', [
            'title->lv'    => 'Test Product',
            'slug->lv'     => 'test-product',
            'category_id'  => $category->id,
            'price'        => 1500.50,
            'is_featured'  => true,
            'is_available' => true,
        ]);
    });

    it('creates product with images successfully', function () {
        Storage::fake('local');
        $category = Category::factory()->create();
        $image1   = UploadedFile::fake()->image('product1.jpg');
        $image2   = UploadedFile::fake()->image('product2.jpg');

        $productData = [
            'product_title'       => 'Test Product with Images',
            'product_description' => 'Test Description',
            'category_id'         => $category->id,
            'product_images'      => [$image1->getClientOriginalName(), $image2->getClientOriginalName()],
            'product_variant'     => [],
        ];

        $response = $this->post(route('admin.product.store'), $productData);

        $response->assertRedirect(route('admin.index'))
                 ->assertSessionHas('success');

        $product = Product::where('title->lv', 'Test Product with Images')->first();
        expect($product->images)->toHaveCount(2);
    });

    it('creates product with variants successfully', function () {
        $category    = Category::factory()->create();
        $productData = [
            'product_title'       => 'Test Product with Variants',
            'product_description' => 'Test Description',
            'category_id'         => $category->id,
            'product_images'      => [],
            'product_variant'     => [
                [
                    'title'     => 'Small Variant',
                    'price'     => 1000.00,
                    'length'    => 5,
                    'width'     => 3,
                    'height'    => 2,
                    'gate_size' => '2x2',
                    'area'      => 15,
                ],
                [
                    'title'     => 'Large Variant',
                    'price'     => 2000.00,
                    'length'    => 10,
                    'width'     => 6,
                    'height'    => 3,
                    'gate_size' => '3x3',
                    'area'      => 60,
                ],
            ],
        ];

        $response = $this->post(route('admin.product.store'), $productData);

        $response->assertRedirect(route('admin.index'))
                 ->assertSessionHas('success');

        $product = Product::where('title->lv', 'Test Product with Variants')->first();
        expect($product->variants)->toHaveCount(2);
        expect($product->variants->first()->title)->toBe('Small Variant');
        expect($product->variants->last()->title)->toBe('Large Variant');
    });

    it('creates product with both images and variants', function () {
        Storage::fake('local');
        $category = Category::factory()->create();
        $image    = UploadedFile::fake()->image('product.jpg');

        $productData = [
            'product_title'       => 'Complete Product',
            'product_description' => 'Complete Description',
            'category_id'         => $category->id,
            'product_images'      => [$image->getClientOriginalName()],
            'product_variant'     => [
                [
                    'title'     => 'Standard Variant',
                    'price'     => 1500.00,
                    'length'    => 8,
                    'width'     => 4,
                    'height'    => 2.5,
                    'gate_size' => '2.5x2.5',
                    'area'      => 32,
                ],
            ],
        ];

        $response = $this->post(route('admin.product.store'), $productData);

        $response->assertRedirect(route('admin.index'))
                 ->assertSessionHas('success');

        $product = Product::where('title->lv', 'Complete Product')->first();
        expect($product->images)->toHaveCount(1);
        expect($product->variants)->toHaveCount(1);
    });
});

//describe('Admin Product Creation - Validation Failures', function () {
//    it('fails when product title is missing', function () {
//        $category = Category::factory()->create();
//
//        $productData = [
//            'product_description' => 'Test Description',
//            'category_id'         => $category->id,
//            'product_images'      => [],
//            'product_variant'     => [],
//        ];
//
//        $response = $this->post(route('admin.product.store'), $productData);
//
//        $response->assertSessionHasErrors(['product_title']);
//        $this->assertDatabaseCount('products', 0);
//    });
//
//    it('fails when category does not exist', function () {
//        $productData = [
//            'product_title'       => 'Test Product',
//            'product_description' => 'Test Description',
//            'category_id'         => 999999, // Non-existent category
//            'product_images'      => [],
//            'product_variant'     => [],
//        ];
//
//        $response = $this->post(route('admin.product.store'), $productData);
//
//        $response->assertSessionHasErrors(['category_id']);
//        $this->assertDatabaseCount('products', 0);
//    });
//
//    it('fails when price is not numeric', function () {
//        $category = Category::factory()->create();
//
//        $productData = [
//            'product_title'       => 'Test Product',
//            'product_description' => 'Test Description',
//            'category_id'         => $category->id,
//            'product_price'       => 'not-a-number',
//            'product_images'      => [],
//            'product_variant'     => [],
//        ];
//
//        $response = $this->post(route('admin.product.store'), $productData);
//
//        $response->assertSessionHasErrors(['product_price']);
//        $this->assertDatabaseCount('products', 0);
//    });
//});

describe('Admin Product Creation - File Upload Handling', function () {
    it('handles file upload validation', function () {
        Storage::fake('local');
        $category    = Category::factory()->create();
        $invalidFile = UploadedFile::fake()->create('document.pdf', 1000); // Not an image

        $productData = [
            'product_title'       => 'Test Product',
            'product_description' => 'Test Description',
            'category_id'         => $category->id,
            'product_images'      => [$invalidFile->getClientOriginalName()],
            'product_variant'     => [],
        ];

        $this->mock(FileServices::class, function ($mock) {
            $mock->shouldReceive('storeMedia')
                 ->andThrow(new \Exception('Invalid file type'));
        });

        $response = $this->post(route('admin.product.store'), $productData);

        $response->assertRedirect()
                 ->assertSessionHas('error', 'Produkts netika izveidots!');
    });

//    it('handles large file uploads', function () {
//        Storage::fake('local');
//        $category   = Category::factory()->create();
//        $largeImage = UploadedFile::fake()->image('large.jpg')->size(10000); // 10MB
//
//        $productData = [
//            'product_title'       => 'Test Product',
//            'product_description' => 'Test Description',
//            'category_id'         => $category->id,
//            'product_images'      => [$largeImage->getClientOriginalName()],
//            'product_variant'     => [],
//        ];
//
//        $response = $this->post(route('admin.product.store'), $productData);
//
//        $response->assertSessionHasErrors(); // Assuming file size validation exists
//    });
});

describe('Admin Product Creation - Exception Handling', function () {
    it('handles database exceptions gracefully', function () {
        // Mock ProductServices to throw an exception
        $this->mock(ProductServices::class, function ($mock) {
            $mock->shouldReceive('storeProduct')
                 ->andThrow(new \Exception('Database connection failed'));
        });

        $category    = Category::factory()->create();
        $productData = [
            'product_title'       => 'Test Product',
            'product_description' => 'Test Description',
            'category_id'         => $category->id,
            'product_images'      => [],
            'product_variant'     => [],
        ];

        $response = $this->post(route('admin.product.store'), $productData);

        $response->assertRedirect()
                 ->assertSessionHas('error', 'Produkts netika izveidots!');
    });

    it('handles service layer exceptions during variant creation', function () {
        $this->mock(ProductServices::class, function ($mock) {
            $mock->shouldReceive('storeProduct')->once();
            $mock->shouldReceive('storeProductImages')->once();
            $mock->shouldReceive('storeProductVariant')
                 ->andThrow(new \Exception('Variant creation failed'));
        });

        $category    = Category::factory()->create();
        $productData = [
            'product_title'       => 'Test Product',
            'product_description' => 'Test Description',
            'category_id'         => $category->id,
            'product_images'      => [],
            'product_variant'     => [
                [
                    'title'     => 'Test Variant',
                    'price'     => 1000,
                    'length'    => 5,
                    'width'     => 3,
                    'height'    => 2,
                    'gate_size' => '2x2',
                    'area'      => 15,
                ],
            ],
        ];

        $response = $this->post(route('admin.product.store'), $productData);

        $response->assertRedirect()
                 ->assertSessionHas('error', 'Produkts netika izveidots!');
    });
});

describe('Admin Product Creation - Edge Cases', function () {
    it('handles empty product variant array', function () {
        $category = Category::factory()->create();

        $productData = [
            'product_title'       => 'Product Without Variants',
            'product_description' => 'Test Description',
            'category_id'         => $category->id,
            'product_images'      => [],
            'product_variant'     => [],
        ];

        $response = $this->post(route('admin.product.store'), $productData);

        $response->assertRedirect(route('admin.index'))
                 ->assertSessionHas('success');

        $product = Product::where('title->lv', 'Product Without Variants')->first();
        expect($product->variants)->toHaveCount(0);
    });

    it('handles empty product images array', function () {
        $category = Category::factory()->create();

        $productData = [
            'product_title'       => 'Product Without Images',
            'product_description' => 'Test Description',
            'category_id'         => $category->id,
            'product_images'      => [],
            'product_variant'     => [],
        ];

        $response = $this->post(route('admin.product.store'), $productData);

        $response->assertRedirect(route('admin.index'))
                 ->assertSessionHas('success');

        $product = Product::where('title->lv', 'Product Without Images')->first();
        expect($product->images)->toHaveCount(0);
    });

    it('handles special characters in product title', function () {
        $category = Category::factory()->create();

        $productData = [
            'product_title'       => 'Speciāls Produkts & Co. (2024)',
            'product_description' => 'Test Description',
            'category_id'         => $category->id,
            'product_images'      => [],
            'product_variant'     => [],
        ];

        $response = $this->post(route('admin.product.store'), $productData);

        $response->assertRedirect(route('admin.index'))
                 ->assertSessionHas('success');

        $product = Product::where('title->lv', 'Speciāls Produkts & Co. (2024)')->first();
        expect($product->slug)->toBe('specials-produkts-co-2024');
    });
});
