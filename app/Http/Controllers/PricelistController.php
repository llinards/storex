<?php

namespace App\Http\Controllers;

use App\Services\ProductServices;
use Illuminate\View\View;

class PricelistController extends Controller
{
    protected ProductServices $productServices;

    public function __construct(ProductServices $productServices)
    {
        $this->productServices = $productServices;
    }

    public function __invoke(): View
    {
        $productVariants = $this->productServices->getAllProductVariants()
                                                 ->sortBy('product_id');

        return view('pricelist', compact('productVariants'));
    }
}
