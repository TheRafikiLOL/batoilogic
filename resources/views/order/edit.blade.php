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
            <h1>Editar Comanda {{$order->id}}</h1>
            <form action="{{route('order.update',$order->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="dealer">Id del repartidor</label>
                    <input type="text" class="form-control" name="dealer" id="dealer" value="{{$order->dealerId}}"/>
                </div>

                <div class="form-group">
                    <label for="state">Estado de la comanda</label>
                    <input type="text" class="form-control" name="state" id="state" value="{{$order->state}}"/>
                </div>

                <div class="form-group">
                    <label for="address">Dirección de entrega</label>
                    <input type="text" class="form-control" name="address" id="address" value="{{$order->address}}"/>
                </div>
                <button type="submit" name="editar">Editar</button>
            </form>
        </div>
    </div>
@endsection
