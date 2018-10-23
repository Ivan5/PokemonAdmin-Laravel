@extends('layouts.app')

@section('title','Create Trainer')

@section('content')
  <form method="POST" action="/trainers" enctype="multipart/form-data">
    @csrf
    <div class="form-goup">
      <label for="">Nombre</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="form-goup mt-2">
      <label for="">Avatar</label>
      <input type="file"  name="avatar">
    </div>
    <div class="form-goup mt-2">
      <label for="">Description</label>
      <textarea class="form-control" name="descruption" id="" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-block mt-3">Guardar</button>
  </form>
@endsection