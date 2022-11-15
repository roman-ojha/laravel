<?php

use Illuminate\Support\Facades\Route;

// to call controller we have to import it like this
use App\Http\Controllers\UserController;

Route::get('/user/{id}', [UserController::class,'show']);


// Calling View using routing
Route::get('/', function () {
    return view('welcome');
});

// Calling View using this controller
// NOTE: here we are using controller sa middle to render View
// Route -> Controller -> View
Route::get('/users/{username}', [UserController::class,'loadUserView']);


// different way to call View using routing
Route::view('about', '/about');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/abouts', function () {
    return redirect('/about');
});

// passing data from routing to view
Route::get('/{name}', function ($name) {
    return view('dynamic', ['name'=>$name]);
});
