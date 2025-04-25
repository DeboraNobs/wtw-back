<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requisito extends Model
{
    protected $guarded = ['id'];
    protected $table = 'requisitos';
    /*
    public function destino() {
        return $this->belongsToMany(Destino::class);
    }

    public function nacionalidad() {
        return $this->belongsToMany(Nacionalidad::class);
    }
    */

    public function destinos()
    {
        return $this->belongsToMany(Destino::class, 'destino_nacionalidad_requisitos', 'requisito_id', 'destino_nacionalidad_id')->withPivot('nacionalidad_id');
    }

    public function nacionalidades()
    {
        return $this->belongsToMany(Nacionalidad::class, 'destino_nacionalidad_requisitos', 'requisito_id', 'destino_nacionalidad_id');
    }

}
