@extends('plantilla')
@section('titulo', 'batoilogic - Nueva linea de Comanda')
@section('contenido')
    <div class="container">
        <h1>Nueva comanda</h1>
        <form action="{{route('orderlinesStore',$id)}}" method='POST'>
            @csrf
            <div class="form-group">
                <label for="prod">Id del producto</label>
                <input type="text" class="form-control" name="prod" id="prod"/>
            </div>
            <div class="form-group">
                <label for="quantity">Cantidad</label>
                <input type="text" class="form-control" name="quantity" id="quantity"/>
            </div>
            <div class="form-group">
                <label for="discount">Descuento</label>
                <input type="text" class="form-control" name="discount" id="discount" />
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">Añadir linea de comanda</button>
            </div>
        </form>
    </div>
@endsection
