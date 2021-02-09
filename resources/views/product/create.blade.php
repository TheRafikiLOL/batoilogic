@extends('plantilla')
@section('titulo', 'Nou Post')
@section('contenido')
    <div class="container">
        <h1>Nou Post</h1>
        <form action="{{route('posts.store')}}" method='POST'>
            @csrf

            <div class="form-group">
                <label for="titol">Títol</label>

                @if ($errors->has('titol'))
                    <div class="text-danger">
                        {{$errors->first('titol')}}
                    </div>
                    <input type="text" name="titol" id="titol" class="form-control">
                @else
                    <input type="text" name="titol" id="titol" class="form-control" value="{{ old('titol') }}">
                @endif
            </div>

            <div class="form-group">
                <label for="contingut">Contingut</label>

                @if ($errors->has('contingut'))
                    <div class="text-danger">
                        {{$errors->first('contingut')}}
                    </div>
                    <textarea name="contingut" id="contingut" class="form-control" rows="3"></textarea>
                @else
                    <textarea name="contingut" id="contingut" class="form-control" rows="3">{{ old('contingut') }}</textarea>
                @endif
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">Afegir post</button>
            </div>
        </form>
    </div>
@endsection
