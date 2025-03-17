<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    protected $guarded = ['id'];
    protected $table = 'destinos';

    public function nacionalidades(){
        return $this->belongsToMany(Nacionalidad::class)->withPivot('num_cupos');
    }

    public function experiencias(){
        return $this->hasMany(Experiencia::class);
    }

    public function secciones(){
        return $this->belongsToMany(Seccion::class);
    }

    public function requisitos() {
        return $this->belongsToMany(Requisito::class);
    }

    public function asesorias() {
        return $this->hasMany(Asesoria::class);
    }
}
