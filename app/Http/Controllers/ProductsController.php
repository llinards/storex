<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductsController extends Controller
{
    public function show(string $locale, Category $category, Product $product)
    {
        $product->load('variants.attachment');

        return view('product', compact('product'));
    }
}
