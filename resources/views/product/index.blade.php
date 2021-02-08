@extends('plantilla')
@section('titulo', 'Llistat posts')
@section('contenido')

    <div class="container">
        <h1>Llistat de posts</h1>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(20rem,1fr)); gap: 1em;">

        @foreach($posts as $post)
            <div class="card" style="width: 100%; max-width: 380px; margin: 10px">
                <div class="card-body">
                    <h2>{{  $post->titol }} ({{  \App\Models\User::find($post->user_id)->email  }})</h2>

                    <div style="display: flex;">
                        <a class="btn btn-primary" style="margin: 0 5px" href="{{ route('posts.show',$post->id) }}">Ver más</a>
                    </div>

                </div>
            </div>
        @endforeach

        </div>
        {{  $posts->links() }}
    </div>
@endsection
