<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes([
    'register' => true,
    'reset'    => true,
    'verify'   => true,
]);

Route::prefix('{locale}')->where(['locale' => '[a-zA-Z]{2}'])->middleware('setLocale')->group(function () {
    //    Home
    Route::get('/', function () {
        return view('home');
    })->name('home');

    //    Products routes
    Route::get('/kategorija', function () {
        return view('category');
    })->name('categories.index');


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

    Route::get('/{category}', [CategoriesController::class, 'show'])->name('category.show');

    //    TODO: Remove this route
    Route::get('/element-test', function () {
        return view('element-test');
    })->name('element-test');
});

Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::prefix('home')->middleware(['auth'])->group(function () {
    Route::get('/', static function () {
        return view('admin.index');
    })->name('admin.index');
});
