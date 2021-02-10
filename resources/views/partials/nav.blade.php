<header>
    <nav class="navbar">
        <div>
            <a class="navbar-brand" id="header-logo" href="{{ route('inici') }}"><img src="{{ asset('img/batoiLogicResources/logo.svg') }}" alt="logo"></a>
            <div class="d-block d-lg-none" id="nav-button"><span></span><span></span><span></span></div>
            <ul id="main-menu">
                <li><a class="navbar-brand headerLink" href="{{ route('inici') }}">Inicio</a></li>
                <li><a class="navbar-brand headerLink" href="{{ route('productos.index') }}">Productos</a></li>
                <li>
                    <a id="registerButtonMobile" class="btn d-lg-none">Regístrate</a>
                    <a id="loginButtonMobile" class="btn  d-lg-none" href="{{route('login')}}">Inicia sesión</a>
                </li>
            </ul>
            <a id="registerButton" class="btn d-none d-lg-block">Regístrate</a>
            <a id="loginButton" class="btn d-none d-lg-block" href="{{route('login')}}">Inicia sesión</a>
        </div>
    </nav>
</header>
