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
            'price'        => $data->product_price ?? null,
        ]);
    }

    public function storeProductVariant(array $data): void
    {
        $locale = $this->getLocale();
        foreach ($data as $variant) {
            $this->product->variants()->create([
                'title'                => [$locale => $variant['title']],
                'price'                => $variant['price'],
                'length'               => $variant['length'],
                'width'                => $variant['width'],
                'height'               => $variant['height'],
                'space_between_arches' => $variant['space_between_arches'] ?? null,
                'gate_size'            => $variant['gate_size'],
                'area'                 => $variant['area'],
                'pvc_tent'             => $variant['pvc_tent'] ?? null,
                'frame_tube'           => $variant['frame_tube'] ?? null,
            ]);
        }
    }

    public function updateProduct(object $data, int $id): void
    {
        $locale        = $this->getLocale();
        $this->product = $this->getProduct($id);

        $this->product->update([
            'title'        => [$locale => $data->product_title],
            'slug'         => [$locale => $this->setSlug($data->product_title)],
            'description'  => [$locale => $data->product_description],
            'category_id'  => $data->category_id,
            'is_featured'  => isset($data['is_featured']),
            'is_available' => isset($data['is_available']),
            'price'        => $data->product_price ?? null,
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

    public function updateProductImages(array $data): void
    {
        $data     = array_filter($data);
        $newOrder = array_map(static function ($item) {
            return basename($item);
        }, $data);

        $this->product->images->each(function ($image, $index) use ($newOrder) {
            if (in_array($image->filename, $newOrder)) {
                $image->update(['order' => array_search($image->filename, $newOrder)]);
            } else {
                $image->delete();
                $this->fileServices->destroyFile('products/'.$image->filename);
            }
        });

        foreach ($newOrder as $index => $filename) {
            if ( ! $this->product->images->contains('filename', $filename)) {
                $this->product->images()->create([
                    'filename' => $filename,
                    'order'    => $index,
                ]);
                $this->fileServices->moveFile('uploads/'.$filename, $filename, '/products');
            }
        }
    }

    public function destroyProduct(int $id): void
    {
        $product = $this->getProduct($id);
        foreach ($product->images as $image) {
            $this->fileServices->destroyFile('products/'.$image->filename);
        }
        $product->delete();
    }
}
