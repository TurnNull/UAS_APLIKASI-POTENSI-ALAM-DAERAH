<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Daerah extends Model
{
    protected $table = 'daerah';
    protected $guarded = ['id'];

    public function potensiAlam() {
        $this->hasMany(PotensiAlam::class);
    }
}
