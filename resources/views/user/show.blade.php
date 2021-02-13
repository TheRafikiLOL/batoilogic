@extends('plantilla')
@section('titulo', 'batoilogic - '.$user->name.' '.$user->surname)
@section('contenido')

    @if(auth()->check())
        @if(auth()->user()->rol != "admin")
            @if(auth()->user()->id != $user->id)
                <script>window.location = "/";</script>
            @endif
        @endif
    @else
        <script>window.location = "/";</script>
    @endif

    <div class="container">
        <h1>{{$user->name}}</h1>

        <p>{{$user}}</p>

        <a href="{{route('usuarios.edit',$user->id)}}">Editar información de cuenta</a><br>

        <form action="{{route('usuarios.destroy',$user->id)}}" method='POST'>
            @csrf
            @method('DELETE')
            <div>
                <button type="submit" class="btn btn-danger" style="padding:8px 50px;margin-top:25px;">Eliminar cuenta</button>
            </div>
        </form>
    </div>

@endsection
