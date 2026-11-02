<header class="container">
    <nav>
        <ul>
                <strong>{{ config('app.name') }}</strong>
        </ul>
        <ul>
                <a href="{{ route('inicio') }}"
                @if (request()->routeIs('inicio.*')) aria-current="page" @endif>Inicio</a>
                <a href="{{ route('eventos.index') }}"
                @if (request()->routeIs('eventos.*')) aria-current="page" @endif>Eventos</a>
        </ul>
    </nav>
</header>
