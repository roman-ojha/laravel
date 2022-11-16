<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::view('/noaccess', 'noaccess');

Route::group(['middleware' =>['groupCheck']], function () {
    // list of route where you want to apply this middleware
    Route::view('user', 'user');
});
