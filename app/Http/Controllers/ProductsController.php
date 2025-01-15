<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductsController extends Controller
{
    public function show(string $locale, Category $category, Product $product)
    {
        return view('product', compact('product'));
    }
}
