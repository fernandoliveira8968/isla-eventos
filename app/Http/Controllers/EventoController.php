<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Evento;
use App\Models\Tipo;


class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tipo = $request->query('tipo');
        $eventos = Evento::with('tipo')
        ->when($tipo, fn ($c) => $c -> whereRelation('tipo', 'slug', $tipo))
        ->orderBy('data')
        ->get();

        return view('eventos.index', [
            'eventos' => $eventos,
            'tipo' => $tipo,
            'tipos' => Tipo::orderBy('nome')->get(),
        ]);
    }

    public function proximos() {
        
        $eventos = Evento::with('tipo')
        ->where('data', '>=', now()->toDateString())
        ->orderBy('data')
        ->limit(3)
        ->get();

        return view('eventos.index', [
            'eventos' => $eventos,
            'tipo' => null,
            'tipos' => Tipo::orderBy('nome')->get(),
        ]);
    }
    
    public function porTipo(string $tipo){
        $eventos = Evento::with('tipo')
        -> whereRelation('tipo', 'slug', $tipo)
        -> orderBy('data')
        -> get();

        if ($eventos->isEmpty()) {
            abort(404);
        }

        return view ('eventos.index', [
            'eventos' => $eventos,
            'tipo' => $tipo,
            'tipos' => Tipo::orderBy('nome')->get(),
        ]);    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Evento $evento): View
    {
        return view('eventos.show', ['evento' => $evento]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
