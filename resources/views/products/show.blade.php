@extends('layout')

@section('content')

    <div class="col-md-8">
      <h2>
        {{ $product->name }}
        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary pull-right">Editar</a>
      </h2>
      <p>
        {{ $product->short }}
      </p>
      {!! $product->body !!}
    </div>
    <div class="col-md-4">
      @include('products.fragment.aside')
    </div>

@endsection
