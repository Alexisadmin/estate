@extends('content/user-interface/navigationbar')

@section('title', 'House for Sales-')



@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">EASY ESTATE RWANDA/</span>Available Houses for Sale</h4>


<!-- Grid Card -->
<div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
  @foreach($houses as $key => $house)
    

  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{ asset('uploads/' . $house->front_image) }}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">House for sale in {{ $house->district }} District</h5>
        <p class="card-text">
        <strong>Price:</strong>{{ $house->price }}Frw <br>
        <a href="javascript:;" class="btn btn-sm btn-primary">View more</a>
        </p>
      </div>
    </div>
  </div>
  @endforeach

</div>


<!--/ Card layout -->
@endsection
