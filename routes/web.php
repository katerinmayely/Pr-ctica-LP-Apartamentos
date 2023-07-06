<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApartamentoController;
use App\Http\Controllers\PropiedadController;
use App\Http\Controllers\DuenioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('presentacion');
});

Route::get('/apartamentos/calcularPrecio/{area}/{piso?}', [ApartamentoController::class, 'calcularPrecio']);
Route::get('/apartamentos/propiedades', [PropiedadController::class, 'index']);
Route::get('/apartamentos/duenios', [DuenioController::class, 'index'])->name('duenios.ver');
Route::get('/apartamentos/duenios/{id}', [DuenioController::class, 'show'])->name('duenio.ver');
Route::get('/apartamentos/duenios/crear', [DuenioController::class, 'create']);
Route::post('apartamentos/duenio/guardar', [DuenioController::class, 'store'])->name('duenio.guardar');
Route::get('/apartamentos/propiedades/{codigo}/duenio', [PropiedadController::class, 'show']); //Ruta para obtener la propiedad y de ahi el codigo del duenio.