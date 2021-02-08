@extends('plantilla')
@section('titulo', 'Fitxa post')
@section('contenido')
    <div class="container">
        <h1>{{$post->titol}} ({{\App\Models\User::find($post->user_id)->email}})</h1>
        <small>Publicado: {{Carbon\Carbon::parse($post->created_at)->format('d/m/Y')}}</small>
        <p>{{$post->contingut}}</p>

        <h2>Comentarios</h2>

        @foreach($comentaris as $comentari)
            <div class="card" style="float: left; margin: 10px 0">
                <div class="card-body">
                    <p>{{$comentari->comentari}}</p>
                    <small>({{\App\Models\User::find($comentari->usuari_id)->email}})</small>
                    <!--<small style="float: right;">Publicado: {{$comentari->created_at}}</small>-->
                    <small style="float: right;">Publicado: {{Carbon\Carbon::parse($comentari->created_at)->format('d/m/Y')}}</small>
                </div>
            </div>
        @endforeach

        @if(auth()->check())
            @if(auth()->user()->email==\App\Models\User::find($post->user_id)->email || auth()->user()->rol == "admin")

                <div style="display: flex; clear: both;">

                    <form action="{{route('posts.destroy',$post->id)}}" method='POST'>
                        @csrf
                        @method('DELETE')
                        <div>
                            <button type="submit" class="btn btn-danger" style="padding:8px 50px;margin-top:25px;">Eliminar post</button>
                        </div>
                    </form>
                    <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}" style="padding:8px 50px;margin-top:25px;margin-left:10px;">Editar post</a>
                </div>

            @endif
        @endif

    </div>
@endsection
