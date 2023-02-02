<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StoreController;

Route::get('/', function () {
    return view('home');
});

Route::view('store', 'store');

Route::post('store', [StoreController::class,'storeUser']);
