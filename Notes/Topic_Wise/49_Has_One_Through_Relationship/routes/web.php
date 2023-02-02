<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\OwnerController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

//
Route::get('/add-mechanic', [MechanicController::class,'add_mechanic']);
Route::get('/add-car/{id}', [CarController::class,'add_car']);
Route::get('/add-owner/{id}', [OwnerController::class,'add_owner']);

Route::get('/get-owner/{id}', [OwnerController::class,'get_owner']);
