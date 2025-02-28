<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/',[PostController::class, 'index']);
Route::get('/posts/{post}/{slug}',[PostController::class, 'show']);
Route::get('/categories/{category}/{slug}',[CategoryController::class, 'index']);
