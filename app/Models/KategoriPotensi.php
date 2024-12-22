<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPotensi extends Model
{
    protected $table = 'kategori_potensi';
    protected $guarded = ['id'];

    public function potensiAlam() {
        $this->hasMany(PotensiAlam::class);
    }
}
