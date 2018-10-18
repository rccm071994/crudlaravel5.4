@extends('layout')

@section('content')

    <div class="col-md-8">
      <h2>
        Editar Producto
        <a href="{{ route('products.index', $product->id) }}" class="btn btn-default pull-right">Listado</a>
      </h2>

      {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT']) !!}
        @include('products.fragment.form')

      {!! Form::close() !!}
    </div>

    <div class="col-md-4">
      @include('products.fragment.aside')
    </div>
@endsection
