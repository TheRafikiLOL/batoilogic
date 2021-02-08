@extends('plantilla')
@section('titulo', 'Editar Post')
@section('contenido')
    <div class="container">
        <h1>Editar Post</h1>
        <form action="{{route('posts.update', $post->id)}}" method='POST'>
            @csrf
            @if ($errors->has('titol'))
                <div class="text-danger">
                    {{$errors->first('titol')}}
                </div>
            @endif
            @method('PUT')
            <div class="form-group">
                <label for="titol">Títol</label>
                <input type="text" name="titol" id="titol" class="form-control" value="{{$post->titol}}">
            </div>

            @if ($errors->has('contingut'))
                <div class="text-danger">
                    {{$errors->first('contingut')}}
                </div>
            @endif
            <div class="form-group">
                <label for="contingut">Contingut</label>
                <textarea name="contingut" id="contingut" class="form-control" rows="3">{{$post->contingut}}</textarea>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">Editar post</button>
            </div>
        </form>
    </div>
@endsection
