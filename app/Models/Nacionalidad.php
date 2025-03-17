<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nacionalidad extends Model
{
    protected $table = 'nacionalidades';
    protected $guarded = ['id'];

    public function usuarios(){
        return $this->hasMany(Usuario::class);
    }

    public function destinos(){
        return $this->belongsToMany(Destino::class)->withPivot('num_cupos');
    }

    public function requisitos() {
        return $this->belongsToMany(Requisito::class);
    }

    public function asesorias() {
        return $this->hasMany(Asesoria::class);
    }
}
