@extends('plantilla')
@section('titulo', 'batoilogic - '.$provider->name)
@section('contenido')

    <div class="container">
        <h1>{{$provider->name}}</h1>

        <p>{{$provider}}</p>
    </div>

@endsection
