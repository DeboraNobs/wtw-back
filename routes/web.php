<?php

use App\Http\Controllers\NacionalidadController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('nacionalidades', NacionalidadController::class);

Route::resource('usuarios', UsuarioController::class);

Route::resource('destinos', DestinoController::class);

