<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuarios';
    protected $guarded = ['id'];

    public function nacionalidad(){
        return $this->belongsTo(Nacionalidad::class);
    }

    public function asesoria(){
        return $this->hasMany(Asesoria::class);
    }
}
