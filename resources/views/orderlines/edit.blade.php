@extends('plantilla')
@section('titulo', 'batoilogic - Editar Comanda')
@section('contenido')

    @if(auth()->check())
        @if(auth()->user()->rol != "admin")
            <script>window.location = "/";</script>
        @endif
    @else
        <script>window.location = "/";</script>
    @endif

    <div class="container">
        <div class="login_registerForm">
            <h1>Editar linea de comanda {{$order->id}}</h1>
            <form action="{{route('orderlines.update',$order->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="producto">Id de producto</label>
                    <input type="text" class="form-control" name="producto" id="producto" value="{{$order->productId}}"/>
                </div>

                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input type="text" class="form-control" name="cantidad" id="cantidad" value="{{$order->quantity}}"/>
                </div>

                <div class="form-group">
                    <label for="descuento">Descuento</label>
                    <input type="text" class="form-control" name="descuento" id="descuento" value="{{$order->discount}}"/>
                </div>
                <button type="submit" name="editar">Editar</button>
            </form>
        </div>
    </div>
@endsection
