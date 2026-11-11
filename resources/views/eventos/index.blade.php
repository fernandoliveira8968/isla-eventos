@extends('layouts.app')
@section('titulo', 'Eventos')
@section('conteudo')
    <h1>Eventos
        @if ($tipo) ( {{ $tipo }} ) @endif
    </h1>
    <a href="{{route('eventos.index')}}">Todos</a>
    <a href="{{ route('eventos.index', ['disponibilidade' => 'disponiveis']) }}">Disponíveis</a>
    @foreach ($tipos as $t)
        <a href="{{ route('eventos.tipo', ['tipo' => $t -> slug]) }}"> {{ $t->nome }} </a>
    @endforeach
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
                    {{ $evento->data->format('d/m/Y') }}
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