<?php

use App\Http\Controllers\AsesoriaController;
use App\Http\Controllers\NacionalidadController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\ExperienciaController;
use App\Http\Controllers\RequisitoController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('login', [LoginController::class, 'verLoginForm'])->name('login.form');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


Route::resource('nacionalidades', NacionalidadController::class);

Route::resource('usuarios', UsuarioController::class);

Route::resource('destinos', DestinoController::class);

Route::resource('experiencias', ExperienciaController::class);

Route::resource('asesorias', AsesoriaController::class);

Route::resource('sucursales', SucursalController::class);

Route::resource('requisitos', RequisitoController::class);

