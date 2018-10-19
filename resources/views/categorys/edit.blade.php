@extends('layout')

@section('content')

    <div class="col-md-8">
      <h2>
        Editar Categoria
        <a href="{{ route('categorys.index', $category->id) }}" class="btn btn-default pull-right">Listado</a>
      </h2>
      @include('categorys.fragmento.error')

      {!! Form::model($category, ['route' => ['categorys.update', $category->id], 'method' => 'PUT']) !!}
        @include('categorys.fragmento.form')

      {!! Form::close() !!}
    </div>

    <div class="col-md-4">
      @include('categorys.fragmento.aside')
    </div>
@endsection
