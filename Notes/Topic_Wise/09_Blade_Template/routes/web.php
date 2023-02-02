<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/user/{id}', [UserController::class,'show']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/{username}', [UserController::class,'loadUserView']);

Route::view('about', '/about');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/abouts', function () {
    return redirect('/about');
});

Route::get('/{name}', function ($name) {
    return view('dynamic', ['name'=>$name]);
});
