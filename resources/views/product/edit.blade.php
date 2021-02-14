@extends('plantilla')
@section('titulo', 'batoilogic - editar '. $product->name)
@section('contenido')

    @if(auth()->check())
        @if(auth()->user()->rol != "admin")
            <script>window.location = "/";</script>
        @endif
    @else
        <script>window.location = "/";</script>
    @endif

    <div class="container">
        <h1>Editar Producto</h1>
        <form action="{{route('productos.update', $product->id)}}" method='POST'>
            @csrf
            @if ($errors->has('name'))
                <div class="text-danger">
                    {{$errors->first('name')}}
                </div>
            @endif
            @method('PUT')
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$product->name}}">
            </div>

            @if ($errors->has('description'))
                <div class="text-danger">
                    {{$errors->first('description')}}
                </div>
            @endif
            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea name="description" id="description" class="form-control" rows="3">{{$product->description}}</textarea>
            </div>

            @if ($errors->has('price'))
                <div class="text-danger">
                    {{$errors->first('price')}}
                </div>
            @endif
            @method('PUT')
            <div class="form-group">
                <label for="price">Precio</label>
                <input type="number" name="price" id="price" class="form-control" value="{{$product->price}}">
            </div>

            @if ($errors->has('stock'))
                <div class="text-danger">
                    {{$errors->first('stock')}}
                </div>
            @endif
            @method('PUT')
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" name="stock" id="stock" class="form-control" value="{{$product->stock}}">
            </div>

            @if ($errors->has('proveiderId'))
                <div class="text-danger">
                    {{$errors->first('proveiderId')}}
                </div>
            @endif
            @method('PUT')
            <div class="form-group">
                <label for="providerId">Proveedor</label>
                <input type="number" name="providerId" id="providerId" class="form-control" value="{{$product->providerId}}">
            </div>

            @if ($errors->has('active'))
                <div class="text-danger">
                    {{$errors->first('active')}}
                </div>
            @endif
            @method('PUT')
            <div class="form-group">
                <label for="active">Producto activo</label><br>
                <input type="radio" name="active" id="active" value="1"> Sí<br>
                <input type="radio" name="active" id="active" value="0"> No<br>
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">Editar producto</button>
            </div>
        </form>
    </div>

@endsection
