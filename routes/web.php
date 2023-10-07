<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftaranController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/pendaftaran', [PendaftaranController::class,'pendaftaran']);

//Auth
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticated'])->name('login.process');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    // Rute yang perlu dilindungi
});

