@extends('plantilla')
@section('titulo', 'Nou Post')
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

        <form action="{{route('productos.store')}}" method='POST'>
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea name="description" id="description" class="form-control" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="price">Precio</label>
                <input type="number" name="price" id="price" class="form-control">
            </div>

            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" name="stock" id="stock" class="form-control">
            </div>

            <div class="form-group">
                <label for="providerId">Proveedor</label>
                <input type="number" name="providerId" id="providerId" class="form-control">
            </div>

            <div class="form-group">
                <label for="active">Producto activo</label><br>
                <input type="radio" name="active" id="active" value="1"> Sí<br>
                <input type="radio" name="active" id="active" value="0"> No<br>
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">Añadir proveedor</button>
            </div>
        </form>

    </div>
@endsection
