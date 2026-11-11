<?php

namespace App\Http\Controllers;

use App\Models\Tipo;

class TipoController extends Controller
{
    public function show(Tipo $tipo){
        $eventos = $tipo->eventos()->orderBy('data')->get();

        return view('tipo.show', [
            'tipo' => $tipo,
            'evento' => $eventos,
        ]);
    }
}
