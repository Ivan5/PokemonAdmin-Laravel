@extends('layouts.app')

@section('title','Edit Trainer')

@section('content')
  <form method="POST" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-goup">
      <label for="">Nombre</label>
      <input type="text" class="form-control" name="name" value="{{$trainer->name}}">
    </div>
    <div class="form-goup mt-2">
      <img src="/images/{{$trainer->avatar}}" alt="" style="height:100px; width:100px; background-color: #efefef;"><br>
      <label for="">Avatar</label>
      <input type="file"  name="avatar">
    </div>
    <div class="form-goup mt-2">
      <label for="">Description</label>
      <textarea class="form-control" name="descruption" id="" cols="30" rows="10">{{$trainer->descruption}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-block mt-3">Guardar</button>
  </form>
@endsection