<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asesoria extends Model
{
    protected $guarded = ['id'];
    protected $table = 'asesorias';

    public function usuario() {
        return $this->belongsTo(Usuario::class);
    }

    public function destino() {
        return $this->belongsTo(Destino::class);
    }

    public function nacionalidad() {
        return $this->belongsTo(Nacionalidad::class);
    }
}
