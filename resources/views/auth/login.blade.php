@extends('plantilla')
@section('titulo', 'batoilogic - Inicia sesión')
@section('contenido')
    <div class="formContainer">
        <div class="loginForm">
            <h1>Inicia Sesión</h1>
            @if (!empty($error))
                <div class="text-danger">
                    {{ $error }}
                </div>
            @endif
            <form action="{{route('log')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" class="form-control" name="email" id="email"/>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="password" />
                </div>
                <!--<input type="submit" name="enviar" value="Inicia sesión" class="btn btn-dark btn-block">-->
                <button class="btn-hover color-8" type="submit" name="enviar">Inicia sesión</button>
            </form>

            <a href="#">¿No tienes una cuenta? Regístrate aquí</a>
        </div>
    </div>
@endsection
