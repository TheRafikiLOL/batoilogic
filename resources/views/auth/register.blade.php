@extends('plantilla')
@section('titulo', 'batoilogic - Regístrate')
@section('contenido')
    <div class="formContainer">
        <div class="login_registerForm">
            <h1>Regístrate</h1>
            @if (!empty($error))
                <div class="text-danger">
                    {{ $error }}
                </div>
            @endif
            <form action="{{route('log')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre"/>
                </div>

                <div class="form-group">
                    <label for="nombre">Apellidos</label>
                    <input type="text" class="form-control" name="nombre" id="nombre"/>
                </div>

                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" class="form-control" name="email" id="email"/>
                </div>
                <div class="form-group">
                    <label for="password1">Contraseña</label>
                    <input type="password" class="form-control" name="password1" id="password1" />
                </div>

                <div class="form-group">
                    <label for="password2">Confirma contraseña</label>
                    <input type="password" class="form-control" name="password2" id="password2" />
                </div>

                <div class="form-group politica_label">
                    <input type="checkbox" id="politica" name="politica" value="true" required>
                    <label for="politica"> Acepta la <a href="#">política de privacidad</a> y los <a href="#">derechos de uso</a>.</label>
                </div>
                <!--<input type="submit" name="enviar" value="Inicia sesión" class="btn btn-dark btn-block">-->
                <button type="submit" name="enviar">REGÍSTRATE</button>
            </form>

            <p>¿Ya tienes una cuenta? <a href="{{route('login')}}">Inicia sesión aquí</a>.</p>
        </div>
    </div>
@endsection
