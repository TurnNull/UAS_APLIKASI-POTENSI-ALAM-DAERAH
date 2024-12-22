<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PromosiPotensi extends Model
{
    protected $table = 'promosi_potensi';
    protected $guarded = ['id'];

    public function potensiAlam() {
        return $this->belongsTo(PotensiAlam::class, 'id_potensi');
    }
}
