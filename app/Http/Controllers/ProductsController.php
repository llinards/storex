<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Services\CategoryServices;
use App\Services\FileServices;
use App\Services\ProductServices;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class ProductsController extends Controller
{
    protected ProductServices $productServices;
    protected CategoryServices $categoryServices;
    protected FileServices $fileServices;

    public function __construct(
        ProductServices $productServices,
        CategoryServices $categoryServices,
        FileServices $fileServices
    ) {
        $this->productServices  = $productServices;
        $this->categoryServices = $categoryServices;
        $this->fileServices     = $fileServices;
    }

    public function create(): View
    {
        $categories = $this->categoryServices->getActiveCategories();

        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $data): RedirectResponse
    {
        try {
            $this->productServices->storeProduct($data);
            $this->productServices->storeProductImages($data['product_images']);
            $this->productServices->storeProductVariant($data['product_variant']);
            $this->fileServices->storeMedia($data['product_images'], 'products');
            Log::info('Product created');

            return redirect()->route('admin.index')->with('success', 'Produkts izveidots!');
        } catch (\Exception $e) {
            Log::error('Product not created: '.$e->getMessage());

            return redirect()->back()->with('error', 'Produkts netika izveidots!');
        }
    }

    public function show(string $locale, Category $category, Product $product): View
    {
        $product->load('variants.attachment');

        return view('product', compact('product'));
    }

    public function showAdmin(string $locale, int $product): View
    {
        $product    = Product::findOrFail($product);
        $categories = $this->categoryServices->getActiveCategories();

        return view('admin.products.show', compact('product', 'categories'));
    }

    public function update(string $locale, Request $data, int $id): RedirectResponse
    {
        try {
            $this->productServices->updateProduct($data, $id);
            $this->productServices->updateProductVariant($data['product_variant']);
            $this->productServices->updateProductImages($data['product_images']);
            Log::info('Product updated');

            return redirect()->route('admin.index')->with('success', 'Produkts atjaunots!');
        } catch (\Exception $e) {
            Log::error('Product not updated: '.$e->getMessage());

            return redirect()->back()->with('error', 'Produkts netika atjaunots!');
        }
    }

    public function destroy(string $locale, int $id): RedirectResponse
    {
        try {
            $this->productServices->destroyProduct($id);
            Log::info('Product deleted');

            return redirect()->back()->with('success', 'Produkts izdzēsts!');
        } catch (\Exception $e) {
            Log::error('Product not updated: '.$e->getMessage());

            return redirect()->back()->with('error', 'Produkts netika izdzēsts!');
        }
    }

    public function destroyProductVariant(string $locale, int $id): RedirectResponse
    {
        try {
            $this->productServices->destroyProductVariant($id);
            Log::info('Product variant deleted');

            return redirect()->back()->with('success', 'Produkta variants izdzēsts!');
        } catch (\Exception $e) {
            Log::error('Product variant not updated: '.$e->getMessage());

            return redirect()->back()->with('error', 'Produkta variants netika izdzēsts!');
        }
    }
}
