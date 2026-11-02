@extends('layouts.app')
@section('titulo')
@section('conteudo')
    <h1>{{ config('app.name') }}</h1>
    <p>Workshops, palestras e hackathons do ISLA Gaia.</p>
    <p><a href="{{ route('eventos.index') }}" class="botao">Ver eventos</a></p>
    <h2>Próximos Eventos</h2>
        <ul>
            @forelse ($proximos as $evento)
            <x-cartao-evento :evento="$evento" />
            @empty
                <x-alerta>Ainda não há eventos marcados.</x-alerta>
            @endforelse
        </ul>
@endsection