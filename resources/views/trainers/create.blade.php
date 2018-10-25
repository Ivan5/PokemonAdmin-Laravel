@extends('layouts.app')

@section('title','Create Trainer')

@section('content')
  @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
    </div>
   
  @endif
  {!! Form::open(['route' => 'trainers.store', 'method' => 'POST', 'files' => true]) !!}
    @include('trainers.form')
    {!! Form::submit('Guardar',['class' => 'btn btn-primary btn-block mt-3']) !!}
  {!! Form::close() !!}
@endsection