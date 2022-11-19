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

// Route To get data and pass to view to edit
Route::get('edit/{id}', [StudentController::class,'getEditingStudent']);
// POST method route to edit student
Route::post('edit', [StudentController::class,"editStudent"]);
