<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftaranController;

Route::get('/', [LoginController::class, 'index']);
Route::get('/pendaftaran', [PendaftaranController::class, 'index']);

// Rute Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticated'])->name('login.process');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute yang perlu dilindungi oleh middleware 'auth'
Route::middleware(['auth'])->group(function () {
    // Rute yang perlu dilindungi
});


