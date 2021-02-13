@extends('plantilla')
@section('titulo', 'batoilogic - Usuarios')
@section('contenido')

    <div class="container">
        <h1>Todos los usuarios</h1>
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Correo electrónico</th>
                    <th>Dirección</th>
                    <th>Opciones</th>
                </tr>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->surname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->address}}</td>
                        <td><a href="{{route('usuarios.show',$user->id)}}">Ver usuario</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{  $users->links() }}
    </div>

@endsection
