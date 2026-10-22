<!DOCTYPE html>
<html lang="pt">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>{{ config('app.name') }}</title>
 <link rel="stylesheet"
 href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>
<body>
    <main class="container">
        <h1>Eventos
            @if ($tipo) ( {{ $tipo }} ) @endif
        </h1>
        <a href="/eventos">Todos</a>
        <a href="/eventos?tipo=workshop">Workshop</a>
        <a href="/eventos?tipo=palestra">Palestra</a>
        <a href="/eventos?tipo=hackathon">Hackathon</a>
        <table>
            @forelse ($eventos as $evento)
                <tr>
                    <td>
                        {{ $loop->iteration }}
                    </td>
                    <td>
                        <a href="/eventos/{{ $evento['id'] }}">{{ $evento['titulo'] }}</a>
                    </td>
                    <td>
                        {{ date('d/m/Y', strtotime ($evento['data']) ) }}
                    </td>
                    <td> 
                        @if ($evento['inscritos'] >= $evento['vagas'])
                            <strong>ESGOTADO</strong>
                        @else
                            {{ $evento['vagas'] - $evento['inscritos'] }}
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Não há eventos para mostrar.</td>
                </tr>
            @endforelse
        </table>
    </main>
</body>
</html>