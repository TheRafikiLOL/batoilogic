@extends('plantilla')
@section('titulo', 'batoilogic - Productos')
@section('contenido')

    <div class="listadoProductos">
        <h1>Listado de Productos</h1>
        <div>

            @foreach($products as $product)

                    <div class="card">
                        <div class="row card-body">
                            <div class="d-none">
                                <a class="btn"  href="{{ route('productos.show',$product->id) }}">Ver más</a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-12">
                                <img src="img/products/placeholder/{{ $product->photo }}" alt="{{ $product->photo }}">
                            </div>

                            <div class="col-12 col-sm-6 col-md-12">
                                <h2>{{ $product->name }}</h2>
                                <h3>{{ showPriceEuro($product->price) }}<span>'{{ showPriceCentimo($product->price) }}</span>€</h3>

                                <div>
                                    <a class="btn"  href="{{ route('productos.show',$product->id) }}">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>

            @endforeach

        </div>
        {{  $products->links() }}
    </div>

@endsection
