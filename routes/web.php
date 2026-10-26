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

Route::get('/eventos/{id}', [EventoController::class, 'show']) 
    ->whereNumber('id')
    ->name('eventos.show');

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});