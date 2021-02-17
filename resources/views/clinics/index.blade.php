@extends('layouts.app')

@section('content')

<div class="container m-5">
@foreach($clinics as $clinic)
<div class="card">
  <div class="card-header">
  {{ $clinic->name }}
  </div>
  <div class="card-body">
    <p class="card-text">{{ $clinic->description }}</p>

    <h5 class="card-title">Special title treatment <a href="{{ $clinic->website }}" >{{ $clinic->website }}</a></h5>
    <a href="{{route('clinics.show',['clinic' => $clinic->id])}}"  class="btn btn-primary">View Details</a>
  </div>
</div>
@endforeach
</div>

{{ $clinics->links() }}

         

@endsection

