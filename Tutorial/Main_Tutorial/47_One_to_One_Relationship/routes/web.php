<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

// Route to add customer
Route::get('add-customer', [CustomerController::class,'add_customer']);

// Route to get Mobile data using customer id
Route::get('show-mobile/{id}', [CustomerController::class,'show_mobile']);
