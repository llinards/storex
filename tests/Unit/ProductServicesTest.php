<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Services\FileServices;
use App\Services\ProductServices;
use Illuminate\Support\Facades\Storage;

beforeEach(function () {
    Storage::fake('public');
    $this->fileServices = Mockery::mock(FileServices::class);
    $this->productServices = new ProductServices($this->fileServices);
});

/**
 * Helper to create a data object that supports both array and object access
 * (mimics Laravel's FormRequest behavior)
 */
function createProductData(array $data): ArrayObject
{
    return new ArrayObject($data, ArrayObject::ARRAY_AS_PROPS);
}

describe('getAllProducts', function () {
    it('returns all products', function () {
        $category = Category::factory()->create();
        Product::factory(3)->create(['category_id' => $category->id]);

        $products = $this->productServices->getAllProducts();

        expect($products)->toHaveCount(3);
    });

    it('returns empty collection when no products exist', function () {
        $products = $this->productServices->getAllProducts();

        expect($products)->toBeEmpty();
    });
});

describe('getAllActiveProducts', function () {
    it('returns only available products', function () {
        $category = Category::factory()->create();
        Product::factory(2)->create(['category_id' => $category->id, 'is_available' => true]);
        Product::factory(1)->create(['category_id' => $category->id, 'is_available' => false]);

        $products = $this->productServices->getAllActiveProducts();

        expect($products)->toHaveCount(2);
        $products->each(fn ($product) => expect((bool) $product->is_available)->toBeTrue());
    });

    it('returns products ordered by category_id descending', function () {
        $category1 = Category::factory()->create();
        $category2 = Category::factory()->create();

        Product::factory()->create(['category_id' => $category1->id, 'is_available' => true]);
        Product::factory()->create(['category_id' => $category2->id, 'is_available' => true]);

        $products = $this->productServices->getAllActiveProducts();

        expect($products->first()->category_id)->toBeGreaterThanOrEqual($products->last()->category_id);
    });
});

describe('getActiveProducts', function () {
    it('returns only available products for a category', function () {
        $category = Category::factory()->create();
        Product::factory(2)->create(['category_id' => $category->id, 'is_available' => true]);
        Product::factory(1)->create(['category_id' => $category->id, 'is_available' => false]);

        $products = $this->productServices->getActiveProducts($category);

        expect($products)->toHaveCount(2);
    });

    it('does not return products from other categories', function () {
        $category1 = Category::factory()->create();
        $category2 = Category::factory()->create();

        Product::factory(2)->create(['category_id' => $category1->id, 'is_available' => true]);
        Product::factory(3)->create(['category_id' => $category2->id, 'is_available' => true]);

        $products = $this->productServices->getActiveProducts($category1);

        expect($products)->toHaveCount(2);
        $products->each(fn ($product) => expect($product->category_id)->toBe($category1->id));
    });
});

describe('getAllProductVariants', function () {
    it('returns all product variants', function () {
        $category = Category::factory()->create();
        $product = Product::factory()->create(['category_id' => $category->id]);
        ProductVariant::factory(3)->create(['product_id' => $product->id]);

        $variants = $this->productServices->getAllProductVariants();

        expect($variants)->toHaveCount(3);
    });
});

describe('storeProduct', function () {
    it('creates a product with correct attributes', function () {
        $category = Category::factory()->create();

        $data = createProductData([
            'product_title' => 'Test Product',
            'product_description' => '<p>Test description</p>',
            'product_additional_info' => 'Additional info',
            'available_area' => '100m²',
            'available_width' => '10m',
            'available_height' => '5m',
            'available_length' => '20m',
            'category_id' => $category->id,
            'product_price' => 999.99,
            'is_featured' => 'on',
            'is_available' => 'on',
        ]);

        $this->productServices->storeProduct($data);

        $product = Product::latest()->first();

        expect($product->getTranslation('title', 'lv'))->toBe('Test Product');
        expect($product->getTranslation('slug', 'lv'))->toBe('test-product');
        expect($product->getTranslation('description', 'lv'))->toBe('<p>Test description</p>');
        expect($product->category_id)->toBe($category->id);
        expect($product->price)->toBe(999.99);
        expect((bool) $product->is_featured)->toBeTrue();
        expect((bool) $product->is_available)->toBeTrue();
    });

    it('creates a product without optional fields', function () {
        $category = Category::factory()->create();

        $data = createProductData([
            'product_title' => 'Simple Product',
            'product_description' => 'Description',
            'product_additional_info' => null,
            'available_area' => null,
            'available_width' => null,
            'available_height' => null,
            'available_length' => null,
            'category_id' => $category->id,
            'product_price' => null,
        ]);

        $this->productServices->storeProduct($data);

        $product = Product::latest()->first();

        expect($product->getTranslation('title', 'lv'))->toBe('Simple Product');
        expect((bool) $product->is_featured)->toBeFalse();
        expect((bool) $product->is_available)->toBeFalse();
        expect($product->price)->toBeNull();
    });

    it('generates correct slug from title', function () {
        $category = Category::factory()->create();

        $data = createProductData([
            'product_title' => 'Product With Spaces & Special!',
            'product_description' => 'Desc',
            'product_additional_info' => null,
            'available_area' => null,
            'available_width' => null,
            'available_height' => null,
            'available_length' => null,
            'category_id' => $category->id,
            'product_price' => null,
        ]);

        $this->productServices->storeProduct($data);

        $product = Product::latest()->first();

        expect($product->getTranslation('slug', 'lv'))->toBe('product-with-spaces-special');
    });
});

describe('updateProduct', function () {
    it('updates product attributes', function () {
        $category = Category::factory()->create();
        $product = Product::factory()->create([
            'category_id' => $category->id,
            'title' => ['lv' => 'Old Title'],
        ]);

        $data = createProductData([
            'product_title' => 'Updated Title',
            'product_description' => 'Updated description',
            'product_additional_info' => 'Updated info',
            'available_area' => '200m²',
            'available_width' => '15m',
            'available_height' => '8m',
            'available_length' => '25m',
            'category_id' => $category->id,
            'product_price' => 1299.99,
            'is_featured' => 'on',
            'is_available' => 'on',
        ]);

        $this->productServices->updateProduct($data, $product->id);

        $product->refresh();

        expect($product->getTranslation('title', 'lv'))->toBe('Updated Title');
        expect($product->getTranslation('slug', 'lv'))->toBe('updated-title');
        expect($product->price)->toBe(1299.99);
    });
});

describe('destroyProduct', function () {
    it('deletes product and its images', function () {
        Storage::fake('public');
        Storage::disk('public')->put('products/image1.jpg', 'content');
        Storage::disk('public')->put('products/image2.jpg', 'content');

        $category = Category::factory()->create();
        $product = Product::factory()->create(['category_id' => $category->id]);
        $product->images()->create(['filename' => 'image1.jpg']);
        $product->images()->create(['filename' => 'image2.jpg']);

        $this->fileServices->shouldReceive('destroyFile')
            ->twice();

        $this->productServices->destroyProduct($product->id);

        expect(Product::find($product->id))->toBeNull();
    });
});

describe('destroyProductVariant', function () {
    it('deletes a product variant', function () {
        $category = Category::factory()->create();
        $product = Product::factory()->create(['category_id' => $category->id]);
        $variant = ProductVariant::factory()->create(['product_id' => $product->id]);

        $this->productServices->destroyProductVariant($variant->id);

        expect(ProductVariant::find($variant->id))->toBeNull();
    });
});

describe('storeProductVariant', function () {
    it('creates product variants', function () {
        $category = Category::factory()->create();

        $productData = createProductData([
            'product_title' => 'Test Product',
            'product_description' => 'Desc',
            'product_additional_info' => null,
            'available_area' => null,
            'available_width' => null,
            'available_height' => null,
            'available_length' => null,
            'category_id' => $category->id,
            'product_price' => null,
        ]);

        $this->productServices->storeProduct($productData);

        $variantData = [
            [
                'title' => 'Small',
                'price' => 99.99,
                'length' => 5,
                'width' => 3,
                'height' => 2,
                'gate_size' => '2x2',
                'area' => 15,
                'space_between_arches' => 1,
                'pvc_tent' => 'Yes',
                'frame_tube' => '40mm',
            ],
            [
                'title' => 'Large',
                'price' => 199.99,
                'length' => 10,
                'width' => 6,
                'height' => 4,
                'gate_size' => '4x4',
                'area' => 60,
                'space_between_arches' => 2,
                'pvc_tent' => 'Yes',
                'frame_tube' => '50mm',
            ],
        ];

        $this->productServices->storeProductVariant($variantData);

        $product = Product::latest()->first();

        expect($product->variants)->toHaveCount(2);

        $variantTitles = $product->variants->map(fn ($v) => $v->getTranslation('title', 'lv'))->sort()->values()->toArray();
        expect($variantTitles)->toBe(['Large', 'Small']);
    });

    it('handles null variant data gracefully', function () {
        $category = Category::factory()->create();

        $productData = createProductData([
            'product_title' => 'Test Product',
            'product_description' => 'Desc',
            'product_additional_info' => null,
            'available_area' => null,
            'available_width' => null,
            'available_height' => null,
            'available_length' => null,
            'category_id' => $category->id,
            'product_price' => null,
        ]);

        $this->productServices->storeProduct($productData);
        $this->productServices->storeProductVariant(null);

        $product = Product::latest()->first();

        expect($product->variants)->toHaveCount(0);
    });
});
