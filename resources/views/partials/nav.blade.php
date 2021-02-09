<header>
    <nav class="navbar">
        <div>
            <a class="navbar-brand" id="header-logo" href="{{ route('inici') }}"><img src="{{ asset('img/batoiLogicResources/logo.svg') }}" alt="logo"></a>
            <ul>
                <li><a class="navbar-brand headerLink" href="{{ route('inici') }}">Inicio</a></li>
                <li><a class="navbar-brand headerLink" href="{{ route('productos.index') }}">Productos</a></li>
            </ul>
            <a id="registerButton" class="btn">Regístrate</a>
            <a id="loginButton" class="btn">Inicia sesión</a>
        </div>
    </nav>
</header>
