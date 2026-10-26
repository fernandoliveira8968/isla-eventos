<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/eventos', [EventoController::class, 'index']); 

Route::get('/eventos/proximos', [EventoController::class, 'proximos'] ) ;

Route::get('/eventos/{id}', [EventoController::class, 'show']) ->whereNumber('id');

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});