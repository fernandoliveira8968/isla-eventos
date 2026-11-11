@extends('layouts.app')
@section('titulo', $evento->titulo)
@section('conteudo')
@if ($evento->inscritos >= $evento->vagas)
    <x-alerta tipo="aviso">Evento esgotado!</x-alerta>
@endif
<h1>{{ $evento->titulo }}</h1>
<p> Tipo: {{ $evento->tipo?->nome }} </p>
<p> Data: {{ $evento->data->format('d/m/Y') }} </p>
<p> Local: {{ $evento->local }} </p>
<p> Inscritos: {{ $evento->inscritos }} de {{ $evento->vagas }} </p>
@if ($evento -> descricao)
    <p> Descrição: {{ $evento->descricao }} </p>
@endif
<p><a href="/eventos" role="button">Voltar aos Eventos</a></p>
@endsection