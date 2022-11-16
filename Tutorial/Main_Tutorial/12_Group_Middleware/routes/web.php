<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::view('/noaccess', 'noaccess');

// Applying Group middleware on routes
Route::group(['middleware' =>['groupCheck']], function () {
    // list of route where you want to apply this middleware
    Route::view('user', 'user');
});
// Route::group(['middleware' =>['<middleware_1>'<middleware_2>']], function () {
// route list
// });
