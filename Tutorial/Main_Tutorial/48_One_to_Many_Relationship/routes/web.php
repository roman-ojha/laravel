<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('add-author', [AuthorController::class,'add_author']);


Route::get('add-post/{id}', [PostController::class,'add_post']);
