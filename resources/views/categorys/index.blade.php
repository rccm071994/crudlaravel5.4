@extends('layout')

@section('content')
  <div class="col-sm-8">
    <h2>
      Listado de Categoria
      <a href="{{ route('categorys.create')}}" class="btn btn-primary pull-right">Nuevo</a>

    </h2>
    @include('categorys.fragmento.info')

    <table class="table table-hover table-striped">
      <thead>
        <tr>
          <th width="20px">ID</th>
          <th>Nombre de la Categoria</th>
          <th>Descripcion</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categorys as $category)
          <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name}}</td>
            <td>{{ $category->description}}</td>
            <td>
              <a href="{{ route('categorys.show', $category->id) }}" class="btn btn-link">Ver</a>
            </td>
            <td>
              <a href="{{ route('categorys.edit', $category->id) }}" class="btn btn-link">Editar</a>
            </td>
            <td>
              <form action="{{ route('categorys.destroy', $category->id) }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <button class="btn btn-link">borrar</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {!! $categorys->render() !!}
  </div>
  <div class="col-sm-4">
    @include('categorys.fragmento.aside')
  </div>
@endsection
