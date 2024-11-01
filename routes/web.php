<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::prefix('{locale}')->where(['locale' => '[a-zA-Z]{2}'])->middleware('setLocale')->group(function () {
    Route::get('/', function () {
        return view('home');
    });
});

Route::get('/', function () {
    return redirect(app()->getLocale());
});
