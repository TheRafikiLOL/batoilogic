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
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name"/>
                </div>

                <div class="form-group">
                    <label for="surname">Apellidos</label>
                    <input type="text" class="form-control" name="surname" id="surname"/>
                </div>

                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" class="form-control" name="email" id="email"/>
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="password" />
                </div>

                <div class="form-group">
                    <label for="password2">Confirma contraseña</label>
                    <input type="password" class="form-control" name="password2" id="password2" />
                </div>
                <div class="form-group">
                    <label for="address">Dirección</label>
                    <input type="text" class="form-control" name="address" id="address"/>
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
