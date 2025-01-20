<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Str;

class ProductServices
{
    protected FileServices $fileServices;
    protected Product $product;

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

    protected function getProduct(int $id): Product
    {
        return Product::findOrFail($id);
    }

    public function getProducts(Category $category): Collection
    {
        return $category->products->where('is_available', true);
    }

    public function getAllProducts(): Collection
    {
        return Product::all()->load('category');
    }

    public function storeProduct(object $data): void
    {
        $locale        = $this->getLocale();
        $this->product = Product::create([
            'title'        => [$locale => $data->product_title],
            'slug'         => [$locale => $this->setSlug($data->product_title)],
            'description'  => [$locale => $data->product_description],
            'category_id'  => $data->category_id,
            'is_featured'  => isset($data['is_featured']),
            'is_available' => isset($data['is_available']),
        ]);
    }

    public function storeProductImages(array $data): void
    {
        foreach ($data as $item) {
            if ($item) {
                $this->product->images()->create([
                    'filename' => basename($item),
                ]);
            }
        }
    }
}
