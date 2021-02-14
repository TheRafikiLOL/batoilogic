@extends('plantilla')
@section('titulo', 'batoilogic - crear')
@section('contenido')

    @if(auth()->check())
        @if(auth()->user()->rol != "admin")
            <script>window.location = "/";</script>
        @endif
    @else
        <script>window.location = "/";</script>
    @endif

    <div class="container">
        <h1>Añadir información de proveedor</h1>

        <form action="{{route('proveedores.store')}}" method='POST'>
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">Añadir proveedor</button>
            </div>
        </form>

    </div>
@endsection
