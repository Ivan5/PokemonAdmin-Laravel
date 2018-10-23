@extends('layouts.app')

@section('title','Create Trainer')

@section('content')
  <form method="POST" action="/trainers">
    @csrf
    <div class="form-goup">
      <label for="">Nombre</label>
      <input type="text" class="form-control" name="name">
    </div>
    <button type="submit" class="btn btn-primary btn-block mt-3">Guardar</button>
  </form>
@endsection