@extends('layouts.app')

@section('content')

<div class="container m-5">
@foreach($clinics as $clinic)
<div class="card">

  <div class="card-header">
  <h5><span>د/ </span>{{ $clinic->name }} 
  </h5>
  </div>
  <div class="card-body">
    <p class="card-text">{{ $clinic->description }}</p>

    <h5 class="card-title"><a href="{{ $clinic->website }}" >{{ $clinic->website }}</a> الموقع الالكتروني </h5>
    <a href="{{route('clinics.show',['clinic' => $clinic->id])}}"  class="btn btn-primary">المزيد</a>
  </div>
</div>
@endforeach
</div>

{{ $clinics->links() }}

         

@endsection

