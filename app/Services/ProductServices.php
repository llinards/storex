<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Str;

class ProductServices
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

    public function getProducts(Category $category): Collection
    {
        return $category->products->where('is_available', true);
    }

    public function getAllProducts(): Collection
    {
        return Product::all();
    }
}
