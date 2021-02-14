@extends('plantilla')
@section('titulo', 'batoilogic - Productos')
@section('contenido')

    <div class="listadoProductos">
        <h1>Todos los productos</h1>

        @if(auth()->check())
            @if(auth()->user()->rol == "admin")
                <a href="{{route('productos.create')}}">Añadir producto</a>
            @endif
        @endif

        <div>

            @foreach($products as $product)

                <div class="card">
                    <div class="row card-body">
                        <div class="card-product">
                            <div class="col-12 card-img">
                                <div class="button-desktop">
                                    <img src="img/products/placeholder/{{ $product->photo }}" alt="{{ $product->photo }}">
                                    <div>
                                        <a class="btn d-none d-lg-block"  href="{{ route('productos.show',$product->id) }}">Ver más</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <h2>{{ $product->name }}</h2>
                                <h3>{{ showPriceEuro($product->price) }}<span>'{{ showPriceCentimo($product->price) }}</span>€</h3>

                                <div class="d-lg-none button-mobile">
                                    <a class="btn"  href="{{ route('productos.show',$product->id) }}">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
        {{  $products->links() }}
    </div>

@endsection
