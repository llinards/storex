<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes([
    'register' => true,
    'reset'    => true,
    'verify'   => true,
]);

Route::prefix('{locale}')->where(['locale' => '[a-zA-Z]{2}'])->middleware('setLocale')->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');
    Route::get('/galerija', function () {
        return view('gallery');
    })->name('gallery');
    Route::get('/par-mums', function () {
        return view('about');
    })->name('about');
    Route::get('/kontakti', function () {
        return view('contacts');
    })->name('contacts');
    Route::get('/buj', function () {
        return view('faq');
    })->name('faq');
    Route::get('/aktualitates', function () {
        return view('article');
    })->name('article');
    Route::get('/cenradis', function () {
        return view('pricelist');
    })->name('pricelist');

//    Temporary route
    Route::get('/produkcija/kategorija-demo/produkts-demo',
        [ProductsController::class, 'show'])->name('product.show');
    Route::get('/produkcija/kategorija-demo',
        [CategoriesController::class, 'show'])->name('category.show');

    Route::get('/produkcija', [CategoriesController::class, 'index'])->name('category.index');
//    Route::get('/produkcija/{category}', [CategoriesController::class, 'show'])->name('category.show');
//    Route::get('/produkcija/{category}/{product}', [ProductsController::class, 'show'])->name('product.show');
});

Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::prefix('home')->middleware(['auth'])->group(function () {
    Route::get('/', static function () {
        return view('admin.index');
    })->name('admin.index');
});
