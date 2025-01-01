<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryServices;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class CategoriesController extends Controller
{
    public function index(string $locale, CategoryServices $categoryServices): View
    {
        $categories = $categoryServices->getCategories($locale);

        return view('category', compact('categories'));
    }


    public function show(string $locale, Request $data)
    {
        return 'Šeit būt visi produkti kategorijā!';
    }

    public function store(Request $data)
    {
        Category::create([
            'title'       => [
                app()->getLocale() => $data['title'],
            ],
            'slug'        => [
                app()->getLocale() => Str::slug($data['title'], '-'),
            ],
            'description' => [
                app()->getLocale() => $data['description'],
            ],
        ]);

        return $data;
    }
}
