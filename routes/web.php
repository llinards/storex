<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\FileUploadController;
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

    Route::get('/produkcija', [CategoriesController::class, 'index'])->name('category.index');
    Route::get('/produkcija/{category}', [CategoriesController::class, 'show'])->name('category.show');
    Route::get('/produkcija/{category}/{product}', [ProductsController::class, 'show'])->name('product.show');
});

Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::get('/home', function () {
    return redirect(app()->getLocale().'/home');
});

Route::prefix('{locale}/home')->where(['locale' => '[a-zA-Z]{2}'])->middleware(['setLocale', 'auth'])->group(function (
) {
    Route::get('/', [CategoriesController::class, 'adminIndex'])->name('admin.index');

    Route::post('/file/store', [FileUploadController::class, 'store']);
    Route::delete('/file/destroy', [FileUploadController::class, 'destroy']);

    Route::get('/produkcija/izveidot', [CategoriesController::class, 'create'])->name('admin.category.create');
    Route::post('/produkcija/izveidot', [CategoriesController::class, 'store'])->name('admin.category.store');
    Route::get('/produkcija/rediget/{category}',
        [CategoriesController::class, 'showAdmin'])->name('admin.category.show');
    Route::put('/produkcija/rediget/{category}',
        [CategoriesController::class, 'update'])->name('admin.category.update');
    Route::delete('/produkcija/rediget/{category}',
        [CategoriesController::class, 'destroy'])->name('admin.category.destroy');

    Route::get('/produkts/izveidot', [ProductsController::class, 'create'])->name('admin.product.create');
    Route::post('/produkts/izveidot', [ProductsController::class, 'store'])->name('admin.product.store');
    Route::get('/produkts/rediget/{product}', [ProductsController::class, 'showAdmin'])->name('admin.product.show');
    Route::put('/produkts/rediget/{product}', [ProductsController::class, 'update'])->name('admin.product.update');
    Route::delete('/produkts/dzest/{product}', [ProductsController::class, 'destroy'])->name('admin.product.destroy');
});
