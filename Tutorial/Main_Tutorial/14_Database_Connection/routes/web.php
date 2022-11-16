<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

// add route middleware
Route::view('/', 'home')->middleware('checkAge');

Route::view('/noaccess', 'noaccess');

Route::group(['middleware' =>['groupCheck']], function () {
    Route::view('user', 'user');
});
