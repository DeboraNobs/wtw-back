<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    protected $guarded = ['id'];
    protected $table = 'secciones';

    public function destinos(){
        return $this->belongsToMany(Destino::class);
    }
}
