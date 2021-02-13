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
        <a href="{{route('proveedores.create')}}">Añadir proveedor</a>
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
                        <td>
                            <a href="{{route('proveedores.show',$provider->id)}}">Ver proveedor</a><br>
                            <form action="{{route('proveedores.destroy',$provider->id)}}" method='POST'>
                                @csrf
                                @method('DELETE')
                                <div>
                                    <button type="submit" class="btn btn-danger" style="padding:8px 50px;margin-top:25px;">Eliminar proveedor</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{  $providers->links() }}
    </div>

@endsection
