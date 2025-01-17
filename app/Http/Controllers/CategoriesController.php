<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryServices;
use App\Services\ProductServices;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class CategoriesController extends Controller
{
    protected CategoryServices $categoryServices;
    protected ProductServices $productServices;

    public function __construct(CategoryServices $categoryServices, ProductServices $productServices)
    {
        $this->categoryServices = $categoryServices;
        $this->productServices  = $productServices;
    }

    public function index(): View
    {
        $categories = $this->categoryServices->getCategories();

        return view('categories', compact('categories'));
    }

    public function adminIndex(): View
    {
        $categories = $this->categoryServices->getAllCategories();
        $products   = $this->productServices->getAllProducts();

        return view('admin.index', compact('categories', 'products'));
    }

    public function create(): View
    {
        return view('admin.categories.create');
    }

    public function store(Request $data): RedirectResponse
    {
        try {
            $this->categoryServices->storeCategory($data);
            $this->categoryServices->storeMedia($data['category_image']);
            Log::info('Category created');

            return redirect()->route('admin.index')->with('success', 'Kategorija izveidota!');
        } catch (\Exception $e) {
            Log::error('Category not created: '.$e->getMessage());

            return redirect()->back()->with('error', 'Kategorija netika izveidota!');
        }
    }

    public function show(string $locale, Category $category): View
    {
        $products = $this->productServices->getProducts($category)->load('images');

        return view('category', compact('category', 'products'));
    }

    public function showAdmin(string $locale, int $category): View
    {
        $category = Category::findOrFail($category);

        return view('admin.categories.show', compact('category'));
    }

    public function update(string $locale, Request $data, int $id): RedirectResponse
    {
        try {
            $this->categoryServices->updateCategory($data, $id);
            Log::info('Category updated');

            return redirect()->route('admin.index')->with('success', 'Kategorija atjaunota!');
        } catch (\Exception $e) {
            Log::error('Category not updated: '.$e->getMessage());

            return redirect()->back()->with('error', 'Kategorija netika atjaunota!');
        }
    }

    public function destroy(string $locale, int $id): RedirectResponse
    {
        try {
            $this->categoryServices->destroyCategory($id);
            Log::info('Category deleted');

            return redirect()->back()->with('success', 'Kategorija dzēsta!');
        } catch (\Exception $e) {
            Log::error('Category not updated: '.$e->getMessage());

            return redirect()->back()->with('error', 'Kategorija netika dzēsta!');
        }
    }
}
