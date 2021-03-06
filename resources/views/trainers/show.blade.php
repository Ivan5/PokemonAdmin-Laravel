@extends('layouts.app')

@section('title','LaraDex | Trainer')

@section('content')
  @include('common.success')
  <img style="height:100px; width:100px; background-color: #efefef;" class="card-img-top rounded-circle mt-2 mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="">
  <div class="text-center">
      <h5>{{$trainer->name}}</h5>
      <p>{{$trainer->descruption}}</p>
      <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Edit</a>
      {!! Form::open(['route' => ['trainers.destroy', $trainer->slug], 'method' => 'DELETE']) !!}
        {!!Form::submit('Delete', ['class' => 'btn btn-danger mt-2'])!!}
      {!!Form::close()!!}
  </div>
@endsection