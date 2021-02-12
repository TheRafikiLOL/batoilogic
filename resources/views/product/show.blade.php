@extends('plantilla')
@section('titulo', 'batoilogic - '.$product->name)
@section('contenido')

    <div class="productContainer">
        <div class="row">
            <div class="col-12 col-md-6 imgContainer">
                <img src="{{ asset('img/products/placeholder/'.$product->photo.'') }}" alt="{{ $product->name }}">
            </div>
            <div class="col-12 col-md-6 dataContainer">
                <div>
                    <h1>{{$product->name}}</h1>
                    <h2>{{ showPriceEuro($product->price) }}'<span>{{ showPriceCentimo($product->price) }}</span>€</h2>
                    <p id="description">{{$product->description}}</p>
                    <div>
                        <a class="btn" href="#">Añadir al carrito</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
