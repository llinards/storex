<?php

namespace App\Http\Controllers;

use App\Models\CategoryTranslation;
use App\Services\CategoryServices;
use Illuminate\View\View;

class CategoriesController extends Controller
{
    public function index(string $locale, CategoryServices $categoryServices): View
    {
        $categories = $categoryServices->getCategories($locale);

        return view('category', compact('categories'));
    }


    public function show(string $locale, CategoryTranslation $category): CategoryTranslation|string
    {
        if ($category->locale !== $locale) {
            abort(404);
        }

//        return $category;
        return 'Šeit būt visi produkti kategorijā!';
    }
}
