<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropiedadController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('propiedades', PropiedadController::class);
Route::post('/propiedades', [PropiedadController::class, 'store']);
