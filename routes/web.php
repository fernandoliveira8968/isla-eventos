<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\InicioController;

Route::get('/', [InicioController::class, 'index'])
    ->name('inicio');

Route::get('/eventos', [EventoController::class, 'index'])
    ->name('eventos.index');

Route::get('/eventos/proximos', [EventoController::class, 'proximos'] )
    ->name('eventos.proximos');

Route::get('/eventos/tipo/{tipo}', [EventoController::class, 'porTipo'])
    ->name('eventos.tipo');

Route::get('/eventos/{evento}', [EventoController::class, 'show']) 
    ->whereNumber('evento')
    ->name('eventos.show');

Route::get('/tipos/{tipo:slug}', [TipoController::class, 'show'])
    ->name('tipos.show');

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});