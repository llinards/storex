<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::with([
            'translation' => function ($query) {
                $query->select('category_id', 'title', 'description', 'locale')
                    ->where('locale', app()->getLocale());
            },
        ])
            ->select('id', 'image')
            ->whereHas('translation', function ($query) {
                $query->where('locale', app()->getLocale());
            })
            ->get();

        return view('home', compact('categories'));
    }
}
