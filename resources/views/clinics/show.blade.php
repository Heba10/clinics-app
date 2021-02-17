
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
<h5>
  {{ $clinic->name }}</h5>
  </div>
  <div class="card-body">
    <p class="card-text">{{$clinic->description}}</p>
    <h5 class="card-title"><a href="{{ $clinic->website }}" >{{ $clinic->website }}</a> الموقع الالكتروني </h5>
   
  </div>
</div>

<div class="form-group">
      <label for="exampleInputPassword1" class="m-5"><h5>الفروع</h5></label>

      <table class="table" lang="ar" dir="rtl">

  
  <tbody>
   
     
      
      @foreach($branchs as $branch)  
      <tr>
      <td>{{$branch->address}}</td>
      <td><span>ت/</span> {{$branch->phone}}</td>
      
      </tr>
        @endforeach
    
   
  </tbody>
</table>
    
       
       
    </div>
</div>

@endsection