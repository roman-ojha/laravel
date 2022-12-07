<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
})->name('home');
// we can add name for every route

Route::get('/about', function () {
    return view('about');
})->name('about');
// now we can use these name to navigate to these routes

Route::get('/redirect/{page}', function ($page) {
    // we can use controller as well to redirect to the named route
    if ($page=='home') {
        return redirect()->route('home');
    } elseif ($page =='about') {
        return redirect()->route('about');
    }
    return "Not Found";
})->name('redirect');
