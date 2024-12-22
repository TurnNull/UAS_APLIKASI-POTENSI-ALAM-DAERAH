<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PotensiAlam extends Model
{
    protected $table = 'potensi_alam';
    protected $guarded = ['id'];
    
    public function daerah() {
        return $this->belongsTo(Daerah::class, 'id_daerah');
    }

    public function kategoriPotensi() {
        return $this->belongsTo(KategoriPotensi::class, 'id_kategori');
    }

}
