<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DukunganController;
use App\Http\Controllers\Filament\LogoutController;

Route::get('/',[PostController::class, 'index'])->name('rumah');
Route::get('/posts/{post}/{slug}',[PostController::class, 'show']);
Route::get('/categories/{category}/{slug}',[CategoryController::class, 'index']);
Route::get('/termncondition',[DukunganController::class, 'term']);
Route::get('/about',[DukunganController::class, 'about']);
Route::get('/privacy',[DukunganController::class, 'privacy']);
Route::get('/privacy',[DukunganController::class, 'privacy']);