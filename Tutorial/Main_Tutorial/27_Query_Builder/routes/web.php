<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('home');
});

Route::get('students', [StudentController::class,'showStudents']);
Route::view('insert', 'insert');
Route::post('insert', [StudentController::class,'insertStudent']);
Route::get('delete/{id}', [StudentController::class,'deleteStudent']);
Route::get('edit/{id}', [StudentController::class,'getEditingStudent']);
Route::post('edit', [StudentController::class,"editStudent"]);
