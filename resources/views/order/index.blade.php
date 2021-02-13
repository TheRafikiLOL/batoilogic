@extends('plantilla')
@section('titulo', 'batoilogic - Comandas')
@section('contenido')

    @if(auth()->check())
        @if(auth()->user()->rol != "admin")
            <script>window.location = "/";</script>
        @endif
    @else
        <script>window.location = "/";</script>
    @endif

    <div class="container">
        <h1>Todas las comandas</h1>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Id de usuario</th>
                        <th>Id de repartidor</th>
                        <th>Dirección de entrega</th>
                        <th>Estado</th>
                        <th>Comanda realizada</th>
                        <th>Opciones</th>
                    </tr>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{$order->customerId}}</td>
                        <td>{{$order->dealerId}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->state}}</td>
                        <td>{{$order->created_at}}</td>
                        <td>
                            <a href="{{route('order.show',$order->id)}}">Ver los datos de la comanda</a>
                            <br>
                            <form action="{{route('order.destroy',$order->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit">Eliminar la comanda</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        {{  $orders->links() }}
    </div>

@endsection
