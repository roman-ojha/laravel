<?php

use App\Http\Controllers\MechanicController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

//
Route::get('/add-mechanic', [MechanicController::class,'add_mechanic']);
