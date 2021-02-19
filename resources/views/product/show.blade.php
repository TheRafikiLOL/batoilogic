@extends('plantilla')
@section('titulo', 'batoilogic - '.$product->name)
@section('contenido')

    <div class="modal-container">
        <img class="d-none" src="{{ asset('img/products/placeholder/'.$product->photo.'') }}" alt="{{ $product->name }}">
    </div>

    <div class="productContainer">
        <div class="row">
            <div class="col-12 col-md-6 imgContainer">
                <img id="imgProduct" src="{{ asset('img/products/placeholder/'.$product->photo.'') }}" alt="{{ $product->name }}">
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

    @if(auth()->check())
        @if(auth()->user()->rol == "admin")
            <a href="{{route('productos.edit',$product->id)}}" class="btn btn-primary m-2">Editar producto</a><br>

            <form action="{{route('productos.destroy',$product->id)}}" method='POST'>
                @csrf
                @method('DELETE')
                <div>
                    <button type="submit" class="btn btn-danger m-2">Eliminar producto</button>
                </div>
            </form>

            <script src={{ asset('js/modal-img.js')  }}></script>
        @endif
    @endif

@endsection
