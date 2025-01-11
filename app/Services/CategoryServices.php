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

    public function getCategories(): Collection
    {
        return Category::all();
    }

    public function storeCategory(object $data): void
    {
        $locale = $this->getLocale();
        Category::create([
            'title'       => [$locale => $data->category_title],
            'slug'        => [$locale => $this->setSlug($data->category_title)],
            'description' => [$locale => $data->category_description],
            'image'       => basename($data['category_image'][0]),
        ]);
    }

    public function storeMedia(array $data): void
    {
        foreach ($data as $item) {
            if ($item) {
                $this->fileServices->moveFile($item, basename($item), 'categories');
            }
        }
    }

    public function updateCategory(object $data, int $id): void
    {
        $locale   = $this->getLocale();
        $category = $this->getCategory($id);

        if ($data['category_image'] !== $category->image) {
            $this->storeMedia($data['category_image']);
        }
        $category->update([
            'title'       => [$locale => $data->category_title],
            'slug'        => [$locale => $this->setSlug($data->category_title)],
            'description' => [$locale => $data->category_description],
            'image'       => basename($data['category_image'][0]),
            'is_featured' => isset($data['is_featured']),
        ]);
    }

    public function destroyCategory(int $id): void
    {
        $category = $this->getCategory($id);
        $this->fileServices->destroyFile('categories/'.$category->image);
        $category->delete();
    }
}
