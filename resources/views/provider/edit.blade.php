@extends('plantilla')
@section('titulo', 'batoilogic - editar '.$provider->name)
@section('contenido')
    <div class="container">
        <h1>Editar información de proveedor</h1>

        <form action="{{route('proveedores.update', $provider->id)}}" method='POST'>
            @csrf
            @if ($errors->has('name'))
                <div class="text-danger">
                    {{$errors->first('name')}}
                </div>
            @endif
            @method('PUT')
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$provider->name}}">
            </div>

            @csrf

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">Editar</button>
            </div>
        </form>

    </div>
@endsection
