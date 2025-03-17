<?php

use App\Http\Controllers\NacionalidadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('nacionalidades', NacionalidadController::class);
