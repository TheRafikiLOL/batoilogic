@extends('plantilla')
@section('titulo', 'batoilogic - '.$user->name.' '.$user->surname)
@section('contenido')

    @if(auth()->check())
        @if(auth()->user()->rol != "admin")
            @if(auth()->user()->id != $user->id)
                <script>window.location = "/";</script>
            @endif
        @endif
    @else
        <script>window.location = "/";</script>
    @endif

    <div class="container">
        <h1>{{$user->name}}</h1>

        <p>{{$user}}</p>

        <a href="{{route('usuarios.edit',$user->id)}}">Editar información de cuenta</a>
    </div>

@endsection
