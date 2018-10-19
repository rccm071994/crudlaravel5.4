@extends('layout')

@section('content')

    <div class="col-md-8">
      <h2>
        Nueva  Categoria
        <a href="{{ route('categorys.index') }}" class="btn btn-default pull-right">Listado</a>
      </h2>

      @include('categorys.fragmento.error')

      {!! Form::open(['route' => 'categorys.store']) !!}

        @include('categorys.fragmento.form')

      {!! Form::close() !!}
    </div>

    <div class="col-md-4">
      @include('categorys.fragmento.aside')
    </div>
@endsection
