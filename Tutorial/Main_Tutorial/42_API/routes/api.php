<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// first import Controller
use App\Http\Controllers\APIController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route for GET Method API
Route::get('get', [APIController::class,'getMethod']);
