<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryServices
{
    public function getCategories(string $locale): Collection
    {
        return Category::with([
            'translations' => function ($query) use ($locale) {
                $query->select('category_id', 'title', 'slug', 'description', 'locale')
                      ->where('locale', $locale);
            },
        ])
                       ->select('id', 'image')
                       ->whereHas('translations', function ($query) use ($locale) {
                           $query->where('locale', $locale);
                       })
                       ->get();
    }
}
