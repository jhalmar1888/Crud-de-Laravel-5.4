@extends('layout')

@section('content')
  
    <div class="col-sm-8">
       <h2>
            Editar Producto
            
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-link">editar</a>

            <a href="{{ route('products.index', $product->id) }}" class="btn btn-link">listado</a>
       </h2>
            <p>
            {{ $product->short }}
            </p>    
            {!! $product->body  !!}         
    </div>
    <div class="col-sm-4">
    @include('products.fragment.aside')
    </div>

@endsection