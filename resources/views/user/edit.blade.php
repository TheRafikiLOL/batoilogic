@extends('plantilla')
@section('titulo', 'batoilogic - editar '.$user->name.' '.$user->surname)
@section('contenido')
    <div class="container">
        <h1>Editar información de cuenta</h1>

        <form action="{{route('usuarios.update', $user->id)}}" method='POST'>
            @csrf
            @if ($errors->has('name'))
                <div class="text-danger">
                    {{$errors->first('name')}}
                </div>
            @endif
            @method('PUT')
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}">
            </div>

            @csrf
            @if ($errors->has('surname'))
                <div class="text-danger">
                    {{$errors->first('surname')}}
                </div>
            @endif
            @method('PUT')
            <div class="form-group">
                <label for="surname">Apellidos</label>
                <input type="text" name="surname" id="surname" class="form-control" value="{{$user->surname}}">
            </div>

            @csrf
            @if ($errors->has('address'))
                <div class="text-danger">
                    {{$errors->first('address')}}
                </div>
            @endif
            @method('PUT')
            <div class="form-group">
                <label for="address">Dirección</label>
                <input type="text" name="address" id="address" class="form-control" value="{{$user->address}}">
            </div>

            @csrf
            @if ($errors->has('email'))
                <div class="text-danger">
                    {{$errors->first('email')}}
                </div>
            @endif
            @method('PUT')
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}">
            </div>

            @csrf
            @if ($errors->has('password1'))
                <div class="text-danger">
                    {{$errors->first('password1')}}
                </div>
            @endif
            @method('PUT')
            <div class="form-group">
                <label for="password1">Contraseña</label>
                <input type="password" name="password1" id="password1" class="form-control">
            </div>

            @csrf
            @if ($errors->has('password2'))
                <div class="text-danger">
                    {{$errors->first('password2')}}
                </div>
            @endif
            @method('PUT')
            <div class="form-group">
                <label for="password2">Confirma contraseña</label>
                <input type="password" name="password2" id="password2" class="form-control">
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">Editar</button>
            </div>
        </form>

    </div>
@endsection
