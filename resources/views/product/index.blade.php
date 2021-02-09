@extends('plantilla')
@section('titulo', 'batoilogic - Productos')
@section('contenido')

    <div class="container">
        <h1>Llistat de posts</h1>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(20rem,1fr)); gap: 1em;">

            @foreach($products as $product)

                @if ($product->active == 1)

                    <div class="card" style="width: 100%; max-width: 380px; margin: 10px">
                        <div class="card-body">
                            <h2>{{  $product->name }} ( {{$product->active}} )</h2>

                            <div style="display: flex;">
                                <a class="btn btn-primary" style="margin: 0 5px" href="{{ route('productos.show',$product->id) }}">Ver más</a>
                            </div>
                        </div>
                    </div>

                @endif

            @endforeach

        </div>
        {{  $products->links() }}
    </div>

@endsection
