<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $guarded = ['id'];
    protected $table = 'articulos';

    public function categorias() {
        return $this->belongsToMany(Categoria::class);
    }
}
