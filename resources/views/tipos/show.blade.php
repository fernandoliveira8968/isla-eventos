@extends('layouts.app')
@section('titulo', $tipo->nome)
@section('conteudo')
    <h1>{{ $tipo->nome }}</h1>
    @forelse ($eventos as $evento)
        <x-cartao-evento :evento="$evento" />
    @empty
        <x-alerta>Não há eventos deste tipo.</x-alerta>
    @endforelse
    <p><a href="{{ route('eventos.index') }}">Voltar aos Eventos</a></p>
@endsection