
@section('title', 'Home')
@extends('content/user-interface/navigationbar')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">EASY ESTATE RWANDA/</span> Home</h4>

<div class="row">
  <div>
  <div class="col-md">    
    <div id="carouselExample-cf" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselExample-cf" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExample-cf" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExample-cf" data-bs-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="{{asset('assets/img/car/c1.jpg')}}" alt="First slide" />
          <div class="carousel-caption d-none d-md-block">
            <h3>New Car Arrival</h3>
            <p>Now you can book new car with our company</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('assets/img/house/h-3.jpg')}}" alt="Second slide" />
          <div class="carousel-caption d-none d-md-block">
            <h3>Houses for Rent or sales</h3>
            <p>Now With Easy Estate you can Available House for Rent and Sales</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('assets/img/plot/pl-2.jpg')}}" alt="Third slide" />
          <div class="carousel-caption d-none d-md-block">
            <h3>Plot For Sales</h3>
            <p>We help you to get plot for sales in different areas</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExample-cf" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample-cf" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md">
    
    <div id="carouselExample-cf" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselExample-cf" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExample-cf" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExample-cf" data-bs-slide-to="2"></li>
      </ol>
     
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('assets/img/house/h-3.jpg')}}" alt="Second slide" />
          <div class="carousel-caption d-none d-md-block">
            <h3>Second slide</h3>
            <p>In numquam omittam sea.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('assets/img/house/h-2.jpg')}}" alt="Third slide" />
          <div class="carousel-caption d-none d-md-block">
            <h3>Third slide</h3>
            <p>Lorem ipsum dolor sit amet, virtute consequat ea qui, minim graeco mel no.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExample-cf" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExample-cf" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
  </div>
</div>


  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <h5 class="card-header"></h5>
        <div class="card-body">             
          
            <div class="d-grid d-sm-flex p-3 border">
              <img src="{{asset('assets/img/logo/state.jpeg')}}" alt="collapse-image" height="125" class="me-4 mb-sm-0 mb-2">
              <span>
                <br>
                The company Easy Estate Rwanda Ltd. specializes in buying, selling, and renting 
                houses, land, and cars. <br> We have set up  YouTube, website, Facebook, Twitter, and 
                Instagram searches for homes and plots that are available online and through our 
                office, which allows customers to view multiple properties simultaneously in easy 
                ways of mouse clicks
              </span>
            
          </div>
        </div>
      </div>
    </div>
    
  </div>
 


@endsection
