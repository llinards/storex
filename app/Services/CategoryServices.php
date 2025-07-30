<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Str;

class CategoryServices
{
    protected FileServices $fileServices;

    public function __construct(FileServices $fileServices)
    {
        $this->fileServices = $fileServices;
    }

    protected function setSlug(string $slug): string
    {
        return Str::slug($slug, '-');
    }

    protected function getLocale(): string
    {
        return app()->getLocale();
    }

    protected function getCategory(int $id): Category
    {
        return Category::findOrFail($id);
    }

    public function getActiveCategories(): Collection
    {
        return Category::all()->where('is_available', true);
    }

    public function getAllCategories(): Collection
    {
        return Category::all();
    }

    public function storeCategory(object $data): void
    {
        $locale = $this->getLocale();
        Category::create([
            'title' => [$locale => $data->category_title],
            'slug' => [$locale => $this->setSlug($data->category_title)],
            'description' => [$locale => $data->category_description],
            'image' => basename($data['category_image'][0]),
            'area' => [$locale => $data->category_area],
            'is_available' => isset($data['is_available']),
            'is_accessory' => isset($data['is_accessory']),
        ]);
    }

    public function updateCategory(object $data, int $id): void
    {
        $locale = $this->getLocale();
        $category = $this->getCategory($id);
        $categoryImage = basename($data['category_image'][0]);

        if ($categoryImage !== $category->image) {
            $this->fileServices->destroyFile('categories/'.$category->image);
            $this->fileServices->storeMedia($data['category_image'], 'categories');
        }
        $category->update([
            'title' => [$locale => $data->category_title],
            'slug' => [$locale => $this->setSlug($data->category_title)],
            'description' => [$locale => $data->category_description],
            'image' => $categoryImage,
            'is_featured' => isset($data['is_featured']),
            'is_available' => isset($data['is_available']),
            'is_accessory' => isset($data['is_accessory']),
            'area' => [$locale => $data->category_area],
        ]);
    }

    public function destroyCategory(int $id): void
    {
        $category = $this->getCategory($id);
        $this->fileServices->destroyFile('categories/'.$category->image);
        $category->delete();
    }
}
