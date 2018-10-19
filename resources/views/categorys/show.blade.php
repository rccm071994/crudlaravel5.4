@extends('layout')

@section('content')

    <div class="col-md-8">
      <h2>
        {{ $category->name }}
        {{ $category->description }}
        <a href="" class="btn btn-primary pull-right">Editar</a>
      </h2>
      
    </div>
    <div class="col-md-4">
      @include('products.fragment.aside')
    </div>

@endsection
