<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('users');
});

Route::get('/check', function () {
    return view('check');
});
Route::view('/noaccess', 'noaccess');
