<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryServices
{
    public function getCategories(): Collection
    {
        return Category::with('translations')
                       ->whereHas('translations', function ($query) {
                           $query->where('locale', app()->getLocale());
                       })
                       ->get();
    }
}
