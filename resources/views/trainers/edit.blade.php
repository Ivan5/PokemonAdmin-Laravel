@extends('layouts.app')

@section('title','Create Trainer')

@section('content')
  {!! Form::model($trainer,['route' => ['trainers.update', $trainer], 'method' => 'PUT', 'files' => true]) !!}
    @include('trainers.form')
    {!! Form::submit('Actualizar',['class' => 'btn btn-primary btn-block mt-3']) !!}
  {!! Form::close() !!}
@endsection