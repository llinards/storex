<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryServices;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class CategoriesController extends Controller
{
    protected CategoryServices $categoryServices;

    public function __construct(CategoryServices $categoryServices)
    {
        $this->categoryServices = $categoryServices;
    }

    public function index(): View
    {
        $categories = $this->categoryServices->getCategories();

        return view('categories', compact('categories'));
    }

    public function adminIndex(): View
    {
        $categories = $this->categoryServices->getCategories();

        return view('admin.index', compact('categories'));
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

    public function show(string $locale, Category $category)
    {
        return view('category', compact('category'));
    }

    public function showAdmin(int $category)
    {
        $category = Category::findOrFail($category);

        return view('admin.categories.show', compact('category'));
    }

    public function update(Request $data, int $id): RedirectResponse
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

    public function destroy(int $id): RedirectResponse
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
