<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// first import Controller
use App\Http\Controllers\APIController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route for GET Method API for test
Route::get('test', [APIController::class,'test']);

// Route for GET Method API
Route::get('get', [APIController::class,'getMethod']);

// Route for GET Method With Params
Route::get('get/id/{id?}', [APIController::class,'getWithId']);
// {id?} : if we will use '?' it means that not required
