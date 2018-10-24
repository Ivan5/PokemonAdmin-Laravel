@extends('layouts.app')

@section('title','LaraDex | Trainer')

@section('content')
  <img style="height:100px; width:100px; background-color: #efefef;" class="card-img-top rounded-circle mt-2 mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="">
  <div class="text-center">
      <h5>{{$trainer->name}}</h5>
      <p>{{$trainer->descruption}}</p>
  </div>
@endsection