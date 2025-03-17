<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requisito extends Model
{
    protected $guarded = ['id'];
    protected $table = 'requisitos';

    public function destino() {
        return $this->belongsToMany(Destino::class);
    }

    public function nacionalidad() {
        return $this->belongsToMany(Nacionalidad::class);
    }
}
