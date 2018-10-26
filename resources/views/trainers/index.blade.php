@extends('layouts.app')

@section('title','LaraDex | Trainer')

@section('content')
    @include('common.success')
    <div class="row">
    @foreach($trainers as $trainer)
      <div class="col-sm">
       <div class="card mt-5 text-center" style="width: 18rem;">
          <img style="height:100px; width:100px; background-color: #efefef;" class="card-img-top rounded-circle mt-2 mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="">
          <div class="card-body">
            <h5 class="card-title">{{$trainer->name}}</h5>
            <p class="card-text">{{$trainer->descruption}}</p>
            <a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">Show More...</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
@endsection