@extends('content/user-interface/navigationbar')

@section('title', 'House for Sales-')



@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">EASY ESTATE RWANDA/</span>Available Houses for Sale</h4>


<!-- Grid Card -->
<div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/house/h-2.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">House for sale in Kicukiro District</h5>
        <p class="card-text">
        <strong>Price:</strong>60,000 Frw <br>
        <a href="javascript:;" class="btn btn-sm btn-outline-primary">View more</a>
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/house/h-1.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">House for sale in Gasabo District</h5>
        <p class="card-text">
        <strong>Price:</strong>70,000 Frw <br>
        <a href="javascript:;" class="btn btn-sm btn-outline-primary">View more</a>
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/house/h-4.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">House for sale in Bugesera District</h5>
        <p class="card-text">
        <strong>Price:</strong>40,000 Frw <br>
        <a href="javascript:;" class="btn btn-sm btn-outline-primary">View more</a>
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/house/h-4.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">House for sale in Bugesera District</h5>
        <p class="card-text">
        <strong>Price:</strong>40,000 Frw <br>
        <a href="javascript:;" class="btn btn-sm btn-outline-primary">View more</a>
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/house/h-5.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">House for sale in Rwamagana District</h5>
        <p class="card-text">
        <strong>Price:</strong>45,000 Frw <br>
        <a href="javascript:;" class="btn btn-sm btn-outline-primary">View more</a>
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img class="card-img-top" src="{{asset('assets/img/house/h-4.jpg')}}" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">House for sale in Kicukiro District</h5>
        <p class="card-text">
        <strong>Price:</strong>80,000 Frw <br>
        <a href="javascript:;" class="btn btn-sm btn-outline-primary">View more</a>
        </p>
      </div>
    </div>
  </div>
</div>


<!--/ Card layout -->
@endsection
