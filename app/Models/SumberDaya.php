<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SumberDaya extends Model
{
    protected $table = 'sumber_daya';
    protected $guarded = ['id'];

    public function potensiAlam() {
        return $this->belongsTo(PotensiAlam::class, 'id_potensi');
    }
}
