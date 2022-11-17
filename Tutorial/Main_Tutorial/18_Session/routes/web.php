<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
// Importing controller
use App\Http\Controllers\UserAuth;

Route::get('/', function () {
    return view('home');
});

// Post method route for UserAuth Controller
Route::post('/login', [UserAuth::class,'userLogin']);

// Route login view
Route::view('/login', 'login');

// After user login we will redirect to this route
Route::get('/user', function () {
    if (session()->has('user')) {
        // if 'user' exist then we will go to 'user' page
        return view('user');
    }
    // if user is not logged in that we will going to redirect it to login page
    else {
        return view('login');
    }
});

// Logout route to delete session
Route::get('/logout', function () {
    if (session()->has('user')) {
        // if 'user' name session exist then we will delete that session
        session()->pull('user');
    }
    // and redirect to 'home' route
    return redirect('/');
});
