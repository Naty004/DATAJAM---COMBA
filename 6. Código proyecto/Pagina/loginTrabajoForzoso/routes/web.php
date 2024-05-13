<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterEmpresaController;
use App\Http\Controllers\RegisterTrabajadorController;
use App\Http\Controllers\SesionUno;
use App\Http\Controllers\SesionDos;

Route::get('/', function () {
    return view('paginaPrincipal');
});

Route::get('/encuestaEmpresasParte1', function () {
    return view('encuestaEmpresasParte1');
});

Route::get('/encuestaEmpresasParte2', function () {
    return view('encuestaEmpresasParte2');
});

Route::get('/encuestaEmpresasParte3', function () {
    return view('encuestaEmpresasParte3');
});

Route::get('/encuestaTrabajadorParte1', function () {
    return view('encuestaTrabajadorParte1');
});

Route::get('/encuestaTrabajadorParte2', function () {
    return view('encuestaTrabajadorParte2');
});

Route::get('/inicioUno', [SesionUno::class, 'create'])
    ->name('inicioUno.index');
Route::post('/inicia-sesion', [SesionUno::class, 'sesionUno'])
    ->name('inicia-sesion');


Route::get('/inicioDos', [SesionDos::class, 'create'])
    ->name('inicioDos.index');



Route::get('/registroEmpresa', [RegisterEmpresaController::class, 'create'])
    ->name('registroEmpresa.index');
Route::post('/validar-registro', [RegisterEmpresaController::class, 'registroEmpresa'])
    ->name('validar-registro-e');


Route::get('/registroTrabajador', [RegisterTrabajadorController::class, 'create'])
    ->name('registroTrabajador.index');
Route::post('/validar-registro', [RegisterTrabajadorController::class, 'registroTrabajador'])
->name('validar-registro-t');