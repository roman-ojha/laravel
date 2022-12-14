<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Public Routes: No authentication

// urls '/api/students' GET
Route::get('/students', [StudentController::class,'index']);
// urls 'api/students/1' GET
Route::get('/students/{id}', [StudentController::class,'show']);
// urls 'api/students' POST
Route::post('/students', [StudentController::class,'store']);
// urls 'api/students/1' PUT
Route::put('/students/{id}', [StudentController::class,'update']);
// urls 'api/students/1' DELETE
Route::delete('/students/{id}', [StudentController::class,'destroy']);
// urls 'api/students/1' GET (search specify student based on city)
Route::get('/students/search/{city}', [StudentController::class,'search']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
