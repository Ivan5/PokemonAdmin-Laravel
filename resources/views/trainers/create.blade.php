@extends('layouts.app')

@section('title','Create Trainer')

@section('content')
  @include('common.errors')
  
  {!! Form::open(['route' => 'trainers.store', 'method' => 'POST', 'files' => true]) !!}
    @include('trainers.form')
    {!! Form::submit('Guardar',['class' => 'btn btn-primary btn-block mt-3']) !!}
  {!! Form::close() !!}
@endsection