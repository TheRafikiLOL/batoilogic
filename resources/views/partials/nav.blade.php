<header>
    <nav class="navbar">
        <div>
            <a class="navbar-brand" id="header-logo" href="{{ route('inici') }}"><img src="{{ asset('img/batoiLogicResources/logo.svg') }}" alt="logo"></a>
            <div class="d-block d-lg-none" id="nav-button"><span></span><span></span><span></span></div>
            <ul id="main-menu">
                <li><a class="navbar-brand headerLink" href="{{ route('inici') }}">Inicio</a></li>
                <li><a class="navbar-brand headerLink" href="{{ route('productos.index') }}">Productos</a></li>
                @if(auth()->check())
                    @if(auth()->user()->rol == "dealer" || auth()->user()->rol == "admin")
                        <li><a class="navbar-brand headerLink admin" href="{{ route('usuarios.index') }}">Usuarios</a></li>
                        <li><a class="navbar-brand headerLink admin" href="{{ route('proveedores.index') }}">Proveedores</a></li>
                        <li><a class="navbar-brand headerLink admin" href="{{ route('order.index') }}">Comandas</a></li>
                    @endif
                @endif
                <li>
                    @if(auth()->guest())
                        <a id="registerButtonMobile" class="btn d-lg-none" href="{{route('register')}}">Regístrate</a>
                        <a id="loginButtonMobile" class="btn  d-lg-none" href="{{route('login')}}">Inicia sesión</a>
                    @endif
                    @if(auth()->check())
                        <img id="userIconMobile" class="d-lg-none" src="img/users/placeholder/{{ auth()->user()->photo }}" alt="Icono de usuario">
                        <a id="loginButtonMobile" class="btn  d-lg-none" href="{{route('logout')}}">Cerrar sesión</a>
                    @endif
                </li>
            </ul>
            @if(auth()->guest())
                <a id="registerButton" class="btn d-none d-lg-block" href="{{route('register')}}">Regístrate</a>
                <a id="loginButton" class="btn d-none d-lg-block" href="{{route('login')}}">Inicia sesión</a>
            @endif
            @if(auth()->check())
                <a href="{{route('usuarios.show',auth()->user()->id)}}" id="userIcon"><img class="d-none d-lg-block" src="/img/users/placeholder/{{ auth()->user()->photo }}" alt="Icono de usuario"></a>
                <a id="loginButton" class="btn d-none d-lg-block" href="{{route('logout')}}">Cerrar sesión</a>
            @endif

        </div>
    </nav>
</header>
