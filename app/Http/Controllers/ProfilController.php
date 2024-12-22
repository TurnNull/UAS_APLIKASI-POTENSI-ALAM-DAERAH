<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index() {
        $profils = Profil::all();
        return view('profil.index', [
            'profils' => $profils
        ]);
    }

    public function show(Profil $profil) {
        return view('profil.show', [
            'profil' => $profil
        ]);
    }
}
