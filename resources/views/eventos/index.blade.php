@extends('layouts.app')
@section('titulo', 'Eventos')
@section('conteudo')
    <h1>Eventos
        @if ($tipo) ( {{ $tipo }} ) @endif
    </h1>
    <a href="{{route('eventos.index')}}">Todos</a>
    <a href="{{ route('eventos.index', ['disponibilidade' => 'disponiveis']) }}">Disponíveis</a>
    <a href="{{ route('eventos.tipo', ['tipo' => 'workshop']) }}">Workshop</a>
    <a href="{{ route('eventos.tipo', ['tipo' => 'palestra']) }}">Palestra</a>
    <a href="{{ route('eventos.tipo', ['tipo' => 'hackathon']) }}">Hackathon</a>
    <a href="/eventos/proximos">Próximos Eventos</a>
    <table>
        @forelse ($eventos as $evento)
            <tr>
                <td>
                    {{ $loop->iteration }}
                </td>
                <td>
                    <a href="/eventos/{{ $evento->id }}">{{ $evento->titulo }}</a>
                </td>
                <td>
                    {{ date('d/m/Y', strtotime ($evento->data) ) }}
                </td>
                <td> 
                    @if ($evento->inscritos >= $evento->vagas)
                        <strong>ESGOTADO</strong>
                    @else
                        {{ $evento->vagas - $evento->inscritos }}
                    @endif
                </td>
            </tr>
        @empty
            <tr>
                <x-alerta tipo="aviso">Não há eventos para mostrar.</x-alerta>
            </tr>
        @endforelse
    </table>
@endsection