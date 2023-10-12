<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\TambahController;

Route::get('/', [LoginController::class, 'index']);
Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->middleware('auth');
Route::get('/listpeserta', [PesertaController::class, 'index'])->name('listpeserta');

// Rute Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticated']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute yang perlu dilindungi oleh middleware 'auth'
Route::middleware(['auth'])->group(function () {
    // Rute yang perlu dilindungi
});

Route::get('/tambah', [TambahController::class, 'tambah']);