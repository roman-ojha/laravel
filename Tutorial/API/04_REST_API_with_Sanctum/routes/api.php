<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/students', function () {
    // urls '/api/students'
    return "Hello Students";
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
