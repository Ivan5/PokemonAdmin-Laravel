@extends('layouts.app')

@section('title','LaraDex | Trainer')

@section('content')
  
    <div class="row">
    @foreach($trainers as $trainer)
      <div class="col-sm">
       <div class="card mt-5" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">{{$trainer->name}}</h5>
            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt quas nobis nam expedita, ea eum ipsum harum repellendus deleniti quos delectus ducimus mollitia omnis, dolorum praesentium ad exercitationem hic consectetur.</p>
            <a href="" class="btn btn-primary">More..</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    

  
  

@endsection