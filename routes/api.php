<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Auth routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('jwt.auth');

//books
Route::apiResource('/books', BookController::class)->only(['index', 'show']);
Route::middleware(['jwt.auth', 'role:admin'])->group(function () {
    Route::apiResource('/books', BookController::class)->only(['store', 'update', 'destroy']);
});

// authors
Route::apiResource('/authors', AuthorController::class)->only(['index', 'show']);
Route::middleware(['jwt.auth', 'role:admin'])->group(function () {
    Route::apiResource('/authors', AuthorController::class)->only(['store', 'update', 'destroy']);
});

//genres
Route::apiResource('/genres', GenreController::class)->only(['index', 'show']);
Route::middleware(['jwt.auth', 'role:admin'])->group(function () {
    Route::apiResource('/genres', GenreController::class)->only(['store', 'update', 'destroy']);
});


