@extends('layouts.app')

@section('title','LaraDex | Trainer')

@section('content')
  
    <div class="row">
    @foreach($trainers as $trainer)
      <div class="col-sm">
       <div class="card mt-5" style="width: 18rem;">
          <img class="card-img-top" src="images/{{$trainer->avatar}}" alt="">
          <div class="card-body">
            <h5 class="card-title">{{$trainer->name}}</h5>
            <p class="card-text">{{$trainer->descruption}}</p>
            <a href="" class="btn btn-primary">More..</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    

  
  

@endsection