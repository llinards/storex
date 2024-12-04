<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes([
    'register' => true,
    'reset' => true,
    'verify' => true,
]);

Route::prefix('{locale}')->where(['locale' => '[a-zA-Z]{2}'])->middleware('setLocale')->group(function () {
    Route::get('/', [CategoriesController::class, 'index'])->name('index');
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
});

Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::middleware(['auth'])->prefix('home')->group(function () {
    Route::get('/', static function () {
        return view('admin.index');
    })->name('admin.index');
});
