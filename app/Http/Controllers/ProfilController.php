<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function show(Profil $profil) {
        return view('profil.index', [
            'profil' => $profil
        ]);
    }
}
