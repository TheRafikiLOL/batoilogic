@extends('plantilla')
@section('titulo', 'batoilogic - Proveedores')
@section('contenido')

    @if(auth()->check())
        @if(auth()->user()->rol != "admin")
            <script>window.location = "/";</script>
        @endif
    @else
        <script>window.location = "/";</script>
    @endif

    <div class="container">
        <h1>Todos los usuarios</h1>
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Opciones</th>
                </tr>
                @foreach($providers as $provider)
                    <tr>
                        <td>{{$provider->id}}</td>
                        <td>{{$provider->name}}</td>
                        <td><a href="{{route('proveedores.show',$provider->id)}}">Ver proveedor</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{  $providers->links() }}
    </div>

@endsection
