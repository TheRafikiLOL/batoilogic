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
                </tr>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->orderId}}</td>
                        <td>{{$order->productId}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}€</td>
                        <td>{{$order->discount}}%</td>
                    </tr>
                    <div class="d-none">
                        {{$total=$total+$order->price}}
                    </div>
                @endforeach
            </table>
            <h4>Total: {{$total}}€</h4>
        </div>
    </div>

@endsection
