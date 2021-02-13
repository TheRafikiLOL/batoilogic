@extends('plantilla')
@section('titulo', 'batoilogic - '.$user->name.' '.$user->surname)
@section('contenido')

    <div class="container">
        <h1>{{$user->name}}</h1>

        <p>{{$user}}</p>

        <a href="{{route('usuarios.edit',$user->id)}}">Editar información de cuenta</a>
    </div>

@endsection
