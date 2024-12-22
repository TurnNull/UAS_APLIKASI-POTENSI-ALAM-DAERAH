<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvestasiPotensi extends Model
{
    protected $table = 'investasi_potensi';
    protected $guarded = ['id'];

    public function potensiAlam() {
        return $this->belongsTo(PotensiAlam::class, 'id_potensi');
    }
}
