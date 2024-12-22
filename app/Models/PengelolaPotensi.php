<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengelolaPotensi extends Model
{
    protected $table = 'pengelola_potensi';
    protected $guarded = ['id'];

    public function potensiAlam() {
        return $this->belongsTo(PotensiAlam::class, 'id_potensi');
    }
}
