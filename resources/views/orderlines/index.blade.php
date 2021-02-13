@extends('plantilla')
@section('titulo', 'batoilogic - Lineas de la Comanda')
@section('contenido')

    @if(auth()->check())
        @if(auth()->user()->rol != "admin")
            <script>window.location = "/";</script>
        @endif
    @else
        <script>window.location = "/";</script>
    @endif

    <div class="container">
        <h1>Productos de la comanda</h1>
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Id de la comanda</th>
                    <th>Id del producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Descuento</th>
                    <th>Opciones</th>
                </tr>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->orderId}}</td>
                        <td>{{$order->productId}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}€</td>
                        <td>{{$order->discount}}%</td>
                        <td><a href="{{route('order.show',$order->id)}}">Ver los datos de la comanda</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection
