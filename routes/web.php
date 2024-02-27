<?php

use App\Http\Controllers\VuelosController;
use App\Http\Controllers\TipoAsientosController;
use App\Http\Controllers\VuelosAsientosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::get('/tipoAsientos', [TipoAsientosController::class,'tipoasientos'])->name('tipoasientos.main');
Route::get('/tipoAsientos/agregar', [TipoAsientosController::class,'agregartipoasientos'])->name('tipoasientos.create');
Route::post('/tipoAsientos/guardar', [TipoAsientosController::class,'store'])->name('tipoasientos.save');
Route::get('/vuelos', [VuelosController::class,'vuelos'])->name('vuelos.main');
Route::get('/vuelos/agregar', [VuelosController::class,'agregarvuelo'])->name('vuelos.create');
Route::post('/vuelos/guardar', [VuelosController::class,'store'])->name('vuelos.save');