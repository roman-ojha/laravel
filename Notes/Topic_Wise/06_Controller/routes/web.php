<?php

use Illuminate\Support\Facades\Route;

// now here we have to import controller
use App\Http\Controllers\UserController;

// Calling Controller with route
Route::get('/user/{id}', [UserController::class,'show']);
// Route::get('/route',[<controller_name>::class, '<function_name>'])
// we can even pass parameter with URL routing and can be able to access that params into controller
// here on '/user/{id}', 'id' is a parameter that value can be able to access by the Controller

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::view('about', '/about');


Route::get('/abouts', function () {
    return redirect('/about');
});

Route::get('/{name}', function ($name) {
    return view('dynamic', ['name'=>$name]);
});
