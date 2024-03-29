<?php

use App\Http\Controllers\HomeController;
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
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute yang perlu dilindungi oleh middleware 'auth'
Route::middleware(['auth'])->group(function () {
    Route::get('home', [HomeController::class, 'index']);
    Route::get('visimisi', [HomeController::class, 'visi']);
    Route::get('sejarah', [HomeController::class, 'sejarah']);
    Route::get('struktur', [HomeController::class, 'struktur']);
    Route::resource('pendaftaran', PendaftaranController::class);
    Route::resource('peserta', PesertaController::class)->except(['create']);
    Route::get('/peserta/create/{id}', [PesertaController::class, 'create'])->name('peserta.create');
});

Route::get('/pendaftaran/export/excel', [PendaftaranController::class, 'export_excel']);
Route::get('/peserta-pelatihan/export/excel/{pendaftaranId}', [PendaftaranController::class, 'export_peserta_pelatihan']);
