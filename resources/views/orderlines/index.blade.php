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
        <a href="{{route('orderlinesCreate',$id)}}">Nueva linea de comanda</a>
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Id de la comanda</th>
                    <th>Id del producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Descuento</th>
                    <th>Total linea</th>
                    <th>Opciones</th>
                </tr>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->orderId}}</td>
                        <td>{{$order->productId}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}€</td>
                        <td>{{$order->discount}}%</td>
                        <td>{{showPriceEuro(($order->price*$order->quantity)-((($order->price*$order->quantity)*$order->discount)/100))}}'{{showPriceCentimo(($order->price*$order->quantity)-((($order->price*$order->quantity)*$order->discount)/100))}}€</td>
                        <td>
                            <a href="{{route('orderlines.edit',$order->id)}}">Editar linea de comanda</a>
                            <br>
                            <form action="{{route('orderlines.destroy',$order->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit">Eliminar la linea de comanda</button>
                            </form>
                        </td>
                    </tr>
                    <div class="d-none">
                        {{$total=$total+($order->price*$order->quantity)-((($order->price*$order->quantity)*$order->discount)/100)}}
                    </div>
                @endforeach
            </table>
            <h4>Total: {{showPriceEuro($total)}}'{{showPriceCentimo($total)}}€</h4>
        </div>
    </div>

@endsection
