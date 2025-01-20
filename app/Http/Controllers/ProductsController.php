<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Services\CategoryServices;
use App\Services\FileServices;
use App\Services\ProductServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

    public function create()
    {
        $categories = $this->categoryServices->getCategories();

        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $data)
    {
        try {
            $this->productServices->storeProduct($data);
            $this->productServices->storeProductImages($data['product_images']);
            $this->fileServices->storeMedia($data['product_images'], 'products');
            Log::info('Product created');

            return redirect()->route('admin.index')->with('success', 'Produkts izveidots!');
        } catch (\Exception $e) {
            Log::error('Product not created: '.$e->getMessage());

            return redirect()->back()->with('error', 'Produkts netika izveidots!');
        }
    }

    public function show(string $locale, Category $category, Product $product)
    {
        $product->load('variants.attachment');

        return view('product', compact('product'));
    }
}
