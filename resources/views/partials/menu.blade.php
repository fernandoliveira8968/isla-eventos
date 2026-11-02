<header class="container">
    <nav>
        <ul>
            <li>
                <strong>{{ config('app.name') }}</strong>
            </li>
        </ul>
        <ul>
            <li>
                <a href="{{ route('inicio') }}"
                @if (request()->routeIs('inicio.*')) aria-current="page" @endif>Inicio</a>
            </li>
            <li>
                <a href="{{ route('eventos.index') }}"
                @if (request()->routeIs('eventos.*')) aria-current="page" @endif>Eventos</a>
            </li>
        </ul>
    </nav>
</header>
