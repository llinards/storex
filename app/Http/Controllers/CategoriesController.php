<?php

namespace App\Http\Controllers;

use App\Models\CategoryTranslation;

class CategoriesController extends Controller
{
    public function show(string $locale, CategoryTranslation $category): CategoryTranslation
    {
        return $category;
    }
}
