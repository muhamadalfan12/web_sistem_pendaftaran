<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PesertaController;
use App\Models\Pendaftaran;

Route::get('/', [LoginController::class, 'index']);

// Route::get('/listpeserta', [PesertaController::class, 'index'])->name('listpeserta');

// Rute Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticated']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute yang perlu dilindungi oleh middleware 'auth'
Route::middleware(['auth'])->group(function () {
    Route::resource('pendaftaran', PendaftaranController::class);
    Route::resource('peserta', PesertaController::class)->except(['create']);
    Route::get('/peserta/create/{id}', [PesertaController::class, 'create'])->name('peserta.create');


});

Route::get('/pendaftaran/export/excel', [PendaftaranController::class, 'export_excel']);
