<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryServices
{
    public function getCategories(): Collection
    {
        return Category::all();
    }
}
