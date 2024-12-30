<?php

namespace App\Http\Controllers;

use App\Services\CategoryServices;
use Illuminate\View\View;

class CategoriesController extends Controller
{
    public function index(string $locale, CategoryServices $categoryServices): View
    {
        $categories = $categoryServices->getCategories($locale);

        return view('categories', compact('categories'));
    }


    public function show()
    {
        // return 'Šeit būt visi produkti kategorijā!';
        return view('category');
    }
}
