<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [BerandaController::class, 'index'])->name('beranda.index');

Route::get('/profil/{profil:nim}', [ProfilController::class, 'show'])->name('profil.show');
