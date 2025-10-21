<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\TransactionController;

// Halaman awal
Route::get('/', fn() => view('welcome'));

// ==================== 🔐 AUTH ====================
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');

// ==================== 📚 BOOKS (Public) ====================
// Hanya index & show yang bisa diakses tanpa login
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{id}', [BookController::class, 'show']);

// ==================== 🧠 GENRES & AUTHORS (Public Read Only) ====================
Route::get('/genres', [GenreController::class, 'index']);
Route::get('/genres/{id}', [GenreController::class, 'show']);

Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/authors/{id}', [AuthorController::class, 'show']);

// ==================== 🔐 PROTECTED ROUTES (Login Required) ====================
Route::middleware(['auth:api'])->group(function () {

    // 🧍 CUSTOMER ONLY
    Route::middleware(['checkrole:customer'])->group(function () {
        // Customer bisa membuat & melihat transaksi mereka
        Route::apiResource('/transactions', TransactionController::class)->only(['index', 'store', 'show']);
    });

    // 👑 ADMIN ONLY
    Route::middleware(['admin'])->group(function () {
        // Admin bisa kelola buku
        Route::apiResource('/books', BookController::class)->only(['store', 'update', 'destroy']);

        // Admin bisa kelola transaksi
        Route::apiResource('/transactions', TransactionController::class)->only(['update', 'destroy']);

        // Admin bisa kelola genre
        Route::post('/genres', [GenreController::class, 'store']);
        Route::put('/genres/{id}', [GenreController::class, 'update']);
        Route::delete('/genres/{id}', [GenreController::class, 'destroy']);

        // Admin bisa kelola author
        Route::post('/authors', [AuthorController::class, 'store']);
        Route::put('/authors/{id}', [AuthorController::class, 'update']);
        Route::delete('/authors/{id}', [AuthorController::class, 'destroy']);
    });
});
