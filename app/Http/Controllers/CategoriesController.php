<?php

namespace App\Http\Controllers;

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

    public function show()
    {
        // return 'Šeit būt visi produkti kategorijā!';
        return view('category');
    }

}
