<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;

Route::get('/', [BerandaController::class, 'index'])->name('beranda.index');

Route::get('/profil/{profil:nim}', [ProfilController::class, 'show'])->name('profil.show');
