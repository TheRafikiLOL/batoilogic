@extends('plantilla')
@section('titulo', 'batoilogic - '.$provider->name)
@section('contenido')

    @if(auth()->check())
        @if(auth()->user()->rol != "admin")
            <script>window.location = "/";</script>
        @endif
    @else
        <script>window.location = "/";</script>
    @endif

    <div class="container">
        <h1>{{$provider->name}}</h1>

        <p>{{$provider}}</p>

        <a href="{{route('proveedores.edit',$provider->id)}}">Editar información de proveedor</a>
    </div>

@endsection
