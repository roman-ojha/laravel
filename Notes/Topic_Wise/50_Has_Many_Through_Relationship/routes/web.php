<?php

use App\Http\Controllers\DeploymentController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('add-project/', [ProjectController::class,'add_project']);
Route::get('add-language/{id}', [LanguageController::class,'add_language']);
Route::get('add-deployment/{id}', [DeploymentController::class,'add_deployment']);

Route::get('get-deployment/{id}', [DeploymentController::class,'get_deployment']);
