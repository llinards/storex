<?php

namespace App\Http\Controllers;

use App\Models\CategoryTranslation;

class CategoriesController extends Controller
{
    public function show(string $locale, CategoryTranslation $category): CategoryTranslation
    {
        if ($category->locale !== $locale) {
            abort(404);
        }

        return $category;
    }
}
