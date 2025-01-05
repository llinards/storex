<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryServices;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class CategoriesController extends Controller
{
    public function index(CategoryServices $categoryServices): View
    {
        $categories = $categoryServices->getCategories();

        return view('categories', compact('categories'));
    }


    public function show()
    {
        // return 'Šeit būt visi produkti kategorijā!';
        return view('category');
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
