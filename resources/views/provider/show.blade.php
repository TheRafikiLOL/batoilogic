@extends('plantilla')
@section('titulo', 'batoilogic - '.$provider->name)
@section('contenido')

    <div class="container">
        <h1>{{$provider->name}}</h1>

        <p>{{$provider}}</p>

        <a href="{{route('proveedores.edit',$provider->id)}}">Editar información de proveedor</a>
    </div>

@endsection
