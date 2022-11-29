<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

// '/login' will render the 'login.blade.php' view page
// then inside it we will create a form on POST method for that we will use '/user' route
Route::get('/login', function () {
    return view('login');
});
// now this route will get the post from data and pass it into the controller
Route::post('/user', [UserController::class,'getPostData']);

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

Route::view('olddata', 'olddata')->name('old');
