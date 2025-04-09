<?php

use App\Http\Controllers\AsesoriaController;
use App\Http\Controllers\NacionalidadController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\ExperienciaController;
use App\Http\Controllers\SeccionController;
use App\Http\Controllers\SucursalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('nacionalidades', NacionalidadController::class);

Route::resource('usuarios', UsuarioController::class);

Route::resource('destinos', DestinoController::class);

Route::resource('experiencias', ExperienciaController::class);

Route::resource('asesorias', AsesoriaController::class);

Route::resource('sucursales', SucursalController::class);
