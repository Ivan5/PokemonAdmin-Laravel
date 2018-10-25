@extends('layouts.app')

@section('title','Create Trainer')

@section('content')
  {!! Form::open(['route' => 'trainers.store', 'method' => 'POST', 'files' => true]) !!}
    <div class="form-goup">
      {!! Form::label('name', 'Nombre') !!}
      {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-goup">
      {!! Form::label('slug', 'Slug') !!}
      {!! Form::text('slug', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-goup mt-2">
      {!! Form::label('avatar', 'Avatar') !!}
      {!! Form::file('avatar', null) !!}
    </div>
    <div class="form-goup mt-2">
      {!! Form::label('descruption', 'Descripcion') !!}
      {!! Form::textarea('descruption', null, ['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('Guardar',['class' => 'btn btn-primary btn-block mt-3']) !!}
  {!! Form::close() !!}
@endsection