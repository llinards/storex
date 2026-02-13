<?php

use App\Models\Category;
use App\Services\CategoryServices;
use App\Services\FileServices;
use Illuminate\Support\Facades\Storage;

beforeEach(function () {
    Storage::fake('public');
    $this->fileServices = Mockery::mock(FileServices::class);
    $this->categoryServices = new CategoryServices($this->fileServices);
});

/**
 * Helper to create a data object that supports both array and object access
 * (mimics Laravel's FormRequest behavior)
 */
function createCategoryData(array $data): ArrayObject
{
    return new ArrayObject($data, ArrayObject::ARRAY_AS_PROPS);
}

describe('getAllCategories', function () {
    it('returns all categories', function () {
        Category::factory(3)->create();

        $categories = $this->categoryServices->getAllCategories();

        expect($categories)->toHaveCount(3);
    });

    it('returns empty collection when no categories exist', function () {
        $categories = $this->categoryServices->getAllCategories();

        expect($categories)->toBeEmpty();
    });
});

describe('getActiveCategories', function () {
    it('returns only available categories', function () {
        Category::factory(2)->create(['is_available' => true]);
        Category::factory(1)->create(['is_available' => false]);

        $categories = $this->categoryServices->getActiveCategories();

        expect($categories)->toHaveCount(2);
        $categories->each(fn ($category) => expect((bool) $category->is_available)->toBeTrue());
    });

    it('returns empty collection when no active categories exist', function () {
        Category::factory(2)->create(['is_available' => false]);

        $categories = $this->categoryServices->getActiveCategories();

        expect($categories)->toBeEmpty();
    });
});

describe('storeCategory', function () {
    it('creates a category with correct attributes', function () {
        Storage::disk('public')->put('uploads/category.jpg', 'image content');

        $data = createCategoryData([
            'category_title' => 'Test Category',
            'category_description' => '<p>Test description</p>',
            'category_area' => '50m²',
            'category_image' => ['uploads/category.jpg'],
            'is_available' => 'on',
            'is_accessory' => 'on',
        ]);

        $this->categoryServices->storeCategory($data);

        $category = Category::latest()->first();

        expect($category->getTranslation('title', 'lv'))->toBe('Test Category');
        expect($category->getTranslation('slug', 'lv'))->toBe('test-category');
        expect($category->getTranslation('description', 'lv'))->toBe('<p>Test description</p>');
        expect($category->getTranslation('area', 'lv'))->toBe('50m²');
        expect($category->image)->toBe('category.jpg');
        expect((bool) $category->is_available)->toBeTrue();
        expect((bool) $category->is_accessory)->toBeTrue();
    });

    it('creates a category without optional flags', function () {
        Storage::disk('public')->put('uploads/category.jpg', 'image content');

        $data = createCategoryData([
            'category_title' => 'Simple Category',
            'category_description' => 'Description',
            'category_area' => null,
            'category_image' => ['uploads/category.jpg'],
        ]);

        $this->categoryServices->storeCategory($data);

        $category = Category::latest()->first();

        expect($category->getTranslation('title', 'lv'))->toBe('Simple Category');
        expect((bool) $category->is_available)->toBeFalse();
        expect((bool) $category->is_accessory)->toBeFalse();
    });

    it('generates correct slug from title', function () {
        Storage::disk('public')->put('uploads/category.jpg', 'image content');

        $data = createCategoryData([
            'category_title' => 'Category With Spaces & Special!',
            'category_description' => 'Desc',
            'category_area' => null,
            'category_image' => ['uploads/category.jpg'],
        ]);

        $this->categoryServices->storeCategory($data);

        $category = Category::latest()->first();

        expect($category->getTranslation('slug', 'lv'))->toBe('category-with-spaces-special');
    });
});

describe('updateCategory', function () {
    it('updates category attributes', function () {
        $category = Category::factory()->create([
            'title' => ['lv' => 'Old Title'],
            'image' => 'old-image.jpg',
        ]);

        Storage::disk('public')->put('uploads/old-image.jpg', 'old content');

        $data = createCategoryData([
            'category_title' => 'Updated Title',
            'category_description' => 'Updated description',
            'category_area' => '100m²',
            'category_image' => ['uploads/old-image.jpg'], // Same image
            'is_featured' => 'on',
            'is_available' => 'on',
            'is_accessory' => 'on',
        ]);

        $this->categoryServices->updateCategory($data, $category->id);

        $category->refresh();

        expect($category->getTranslation('title', 'lv'))->toBe('Updated Title');
        expect($category->getTranslation('slug', 'lv'))->toBe('updated-title');
        expect($category->getTranslation('area', 'lv'))->toBe('100m²');
        expect((bool) $category->is_featured)->toBeTrue();
        expect((bool) $category->is_available)->toBeTrue();
        expect((bool) $category->is_accessory)->toBeTrue();
    });

    it('replaces old image when new image is uploaded', function () {
        $category = Category::factory()->create([
            'title' => ['lv' => 'Old Title'],
            'image' => 'old-image.jpg',
        ]);

        Storage::disk('public')->put('categories/old-image.jpg', 'old content');
        Storage::disk('public')->put('uploads/new-image.jpg', 'new content');

        $this->fileServices->shouldReceive('destroyFile')
            ->once()
            ->with('categories/old-image.jpg');

        $this->fileServices->shouldReceive('storeMedia')
            ->once()
            ->with(['uploads/new-image.jpg'], 'categories');

        $data = createCategoryData([
            'category_title' => 'Updated Title',
            'category_description' => 'Updated description',
            'category_area' => null,
            'category_image' => ['uploads/new-image.jpg'], // New image
        ]);

        $this->categoryServices->updateCategory($data, $category->id);

        $category->refresh();

        expect($category->image)->toBe('new-image.jpg');
    });
});

describe('destroyCategory', function () {
    it('deletes category and its image', function () {
        $category = Category::factory()->create([
            'image' => 'test-image.jpg',
        ]);

        $this->fileServices->shouldReceive('destroyFile')
            ->once()
            ->with('categories/test-image.jpg');

        $this->categoryServices->destroyCategory($category->id);

        expect(Category::find($category->id))->toBeNull();
    });
});
