@extends('content/user-interface/navigationbar')

@section('title', 'Plot-')



@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">EASY ESTATE RWANDA/</span> Available plot for sale</h4>
<div class="row row-cols-1 row-cols-md-3 g-4 mb-5">

@foreach($plots as $plot)
  

  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{ asset('uploads/' . $plot->front_image) }}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title"> Plot for sale in {{ $plot->province }} Province</h5>
        <p class="card-text"> A good plot with all nessesary documnts in {{ $plot->district }} District</p>
      </div>
    </div>
  </div>

@endforeach

</div>

<!--/ Card layout -->
@endsection
