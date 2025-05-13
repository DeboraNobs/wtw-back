<?php

use App\Http\Controllers\Api\AsesoriasApiController;
use App\Http\Controllers\Api\DestinosApiController;
use App\Http\Controllers\Api\LoginApiController;
use App\Http\Controllers\Api\NacionalidadesApiController;
use App\Http\Controllers\Api\UsuarioApiController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('usuarios', UsuarioApiController::class);
Route::apiResource('nacionalidades', NacionalidadesApiController::class);
Route::apiResource('destinos', DestinosApiController::class);
Route::apiResource('asesorias', AsesoriasApiController::class);

Route::post('/api-login', [LoginApiController::class, 'login']);

Route::get('/sanctum/csrf-cookie', function () {
    return response()->json('CSRF token set');
});

Route::middleware('auth:sanctum')->post('/logout', [LoginApiController::class, 'logout']);


