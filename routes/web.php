<?php

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
    });
});

Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::middleware(['auth'])->prefix('home')->group(function () {
    Route::get('/', static function () {
        return view('admin.index');
    })->name('admin.index');
});
