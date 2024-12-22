<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\BerandaController;

Route::get('/', [BerandaController::class, 'index'])->name('beranda.index');

Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
Route::get('/profil/{profil:nim}', [ProfilController::class, 'show'])->name('profil.show');
