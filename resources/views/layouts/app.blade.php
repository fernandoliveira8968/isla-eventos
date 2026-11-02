<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('titulo', 'Início') - {{ config('app.name') }}</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('partials.menu')
        <main class="contentor">
            @yield('conteudo')
        </main>
        @include('partials.rodape')
    </body>
</html>