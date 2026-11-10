<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;


class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tipo = $request->query('tipo');
        $eventos = DB::table('eventos')
        ->when($tipo, fn ($consulta) => $consulta->where('tipo', $tipo))
        ->orderBy('data')
        ->get();

        return view('eventos.index', [
            'eventos' => $eventos,
            'tipo' => $tipo,
        ]);
    }

    public function proximos() {
        
        $eventos = DB::table('eventos')
        ->where('data', '>=', now()->toDateString())
        ->orderBy('data')
        ->limit(3)
        ->get();

        return view('eventos.index', [
            'eventos' => $eventos,
            'tipo' => null,
        ]);
    }
    
    public function porTipo(string $tipo){
        $eventos = DB::table('eventos')
        -> where('tipo', $tipo)
        -> orderBy('data')
        -> get();

        if ($eventos->isEmpty()) {
            abort(404);
        }

        return view ('eventos.index', [
            'eventos' => $eventos,
            'tipo' => $tipo,
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
    public function show(int $id): View
    {
        $evento = DB::table('eventos')->find($id);
        
        if ($evento === null) {
            abort(404);
        }
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
