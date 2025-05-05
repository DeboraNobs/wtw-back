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


Route::middleware('RolCheck:admin')->group(function () {
    Route::resource('nacionalidades', NacionalidadController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('destinos', DestinoController::class);
    Route::resource('experiencias', ExperienciaController::class);
    Route::resource('asesorias', AsesoriaController::class);
    Route::resource('sucursales', SucursalController::class);
    Route::resource('requisitos', RequisitoController::class);

});

// el usuario no debe poder ver nada de usuarios ni de nacionalidades
Route::middleware('RolCheck:usuario')->group(function () {
    Route::resource('sucursales', SucursalController::class)->only(['index', 'show']);
    Route::resource('experiencias', ExperienciaController::class)->only(['index', 'show', 'create', 'store']); // debe poder crear una experiencia
    Route::resource('requisitos', RequisitoController::class)->only(['index', 'show']);
    Route::resource('destinos', DestinoController::class)->only(['index', 'show']);
    Route::resource('asesorias', AsesoriaController::class)->only(['index','create', 'store']);
});
