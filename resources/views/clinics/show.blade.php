
@extends('layouts.app')
@section('content')

<!-- <div class="card" style="width: 18rem;">
 
  <div class="card-body">
    <h5 class="card-title">{{$clinic->name}}</h5>
    <p class="card-text"></p>
    
  </div>
</div> -->
<div class="container m-5">
<div class="card">
<div class="card-header">
  {{ $clinic->name }}
  </div>
  <div class="card-body">
    <h5 class="card-title">{{$clinic->name}}</h5>
    <p class="card-text">{{$clinic->description}}</p>
    <h5 class="card-title">Special title treatment <a href="{{ $clinic->website }}" >{{ $clinic->website }}</a></h5>
   
  </div>
</div>

<div class="form-group">
      <label for="exampleInputPassword1">branchs</label>
    
        @foreach($branchs as $branch)  
          <option value="{{$branch->id}}">{{$branch->phone}}</option>
          <option value="{{$branch->id}}">{{$branch->address}}</option>
        @endforeach
       
    </div>
</div>

@endsection