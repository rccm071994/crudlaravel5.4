<div class="form-group">
  {!! Form::label('name', 'Nombre de la Categoria') !!}
  {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('description', 'Descripcion del Categoria') !!}
  {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>
