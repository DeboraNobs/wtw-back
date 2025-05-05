<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'usuarios';
    protected $guarded = ['id'];

    public function nacionalidad(){
        return $this->belongsTo(Nacionalidad::class);
    }

    public function asesoria(){
        return $this->hasMany(Asesoria::class);
    }

}
