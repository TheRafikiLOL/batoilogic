@extends('plantilla')
@section('titulo', 'batoilogic - Nueva Comanda')
@section('contenido')

    @if(auth()->check())
        @if(auth()->user()->rol != "admin")
            <script>window.location = "/";</script>
        @endif
    @else
        <script>window.location = "/";</script>
    @endif

    <div class="container">
        <h1>Nueva comanda</h1>
        <form action="{{route('order.store')}}" method='POST'>
            @csrf
            <div class="form-group">
                <label for="customer">Id de cliente</label>
                <input type="text" class="form-control" name="customer" id="customer"/>
            </div>
            <div class="form-group">
                <label for="dealer">Id del repartidor</label>
                <input type="text" class="form-control" name="dealer" id="dealer"/>
            </div>
            <div class="form-group">
                <label for="state">Estado de la comanda</label>
                <input type="text" class="form-control" name="state" id="state" />
            </div>
            <div class="form-group">
                <label for="address">Dirección de entrega</label>
                <input type="text" class="form-control" name="address" id="address" />
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">Añadir comanda</button>
            </div>
        </form>
    </div>
@endsection
