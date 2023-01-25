@extends('content/user-interface/navigationbar')

@section('title', 'car-')



@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">EASY ESTATE RWANDA/</span> Available car for sale</h4>
<div class="row row-cols-1 row-cols-md-3 g-4 mb-5">

@foreach($cars as $car)
  

  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{ asset('uploads/' . $car->front_image) }}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">   {{ $car->car_name }} for {{ $car->usage }}</h5>
        <p class="card-text">{{ $car->price }} RWF</p>
      </div>
      <a href="javascript:;" class="btn btn-sm btn-success">View more</a>
    </div>
  </div>

@endforeach

</div>

<!--/ Card layout -->
@endsection
