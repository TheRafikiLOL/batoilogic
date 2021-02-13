@extends('plantilla')
@section('titulo', 'batoilogic - Comanda')
@section('contenido')

    <div class="container">
        <h1>Id de la comanda: {{$order->id}}</h1>
        <h2>Id del usuario: {{$order->customerId}}</h2>
        <h2>Id del repartidor: {{$order->dealerId}}</h2>
        @if($order->state==1)
            <h2>Estado de la comanda: Entregada</h2>
        @else
            <h2>Estado de la comanda: No entregada</h2>
        @endif
        <h2>Dirección de entrega: {{$order->address}}</h2>
        <h2>Fecha de la comanda: {{$order->created_at}}</h2>
        <div>
            <a href="{{route('order.edit',$order->id)}}">Editar los datos de la comanda</a>
        </div>
        <div>
            <a href="">Ver los productos de de la comanda</a>
        </div>
    </div>

@endsection

