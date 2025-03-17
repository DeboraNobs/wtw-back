<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $guarded = ['id'];
    protected $table = 'categorias';

    public function articulos() {
        return $this->belongsToMany(Articulo::class);
    }
}
