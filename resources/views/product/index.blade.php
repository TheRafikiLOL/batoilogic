@extends('plantilla')
@section('titulo', 'batoilogic - Productos')
@section('contenido')

    <div class="listadoProductos container">
        <h1>Llistat de posts</h1>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(20rem,1fr)); gap: 1em;">

            @foreach($products as $product)

                    <div class="card" style="width: 100%; max-width: 380px; margin: 10px">
                        <div class="card-body">
                            <img src="img/products/placeholder/{{ $product->photo }}" alt="{{ $product->photo }}">

                            <h2>{{ $product->name }}</h2>
                            <h3>{{ showPriceEuro($product->price) }}<span>'{{ showPriceCentimo($product->price) }}</span>€</h3>

                            <div style="display: flex;">
                                <a class="btn btn-primary" style="margin: 0 5px" href="{{ route('productos.show',$product->id) }}">Ver más</a>
                            </div>
                        </div>
                    </div>

            @endforeach

        </div>
        {{  $products->links() }}
    </div>

@endsection
