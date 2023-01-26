@extends('content/user-interface/navigationbar')

@section('title', 'About-')
@section('content')
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
              <span>
              <br>
              <div class="card-body pb-0 px-0 px-md-4">
                <img src="{{asset('assets/img/illustrations/man-with-laptop-light.png')}}" height="100" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
                    </div><br>
                <h3 class="text-success">OUR CORE VALUES:</h3> 
                As our team has expanded, it has become increasingly crucial to recognize and 
                describe the guiding principles that underpin all we do. Our basic principles shape 
                and establish our culture, brand, business strategies, and who we are 
                as professionals in the business world today. We encourage both our teammates 
                and our clients to hold us accountable to these values:
         
                <ul >
                  
                <li class="badge  bg-label-primary">Innovate and Lead</li> 
                <li class="badge -pill bg-label-primary"> Embrace Accountability </li>
                <li class="badge -pill bg-label-primary"> Focus on Solutions</li> <br> <br>
                <li class="badge -pill bg-label-primary">Build Relationships and Have Fun</li>
                <li class="badge -pill bg-label-primary">Be Great and Never Settle</li>
                </ul>     
             </span>            
          </div>
          <div class="d-grid d-sm-flex p-3 border">
            <img src="{{asset('assets/img/illustrations/miss2.png')}}" alt="collapse-image" height="125" class="me-4 mb-sm-0 mb-2">
            <span>
              <br>
              <i class="bx bx-pointer mb-1 bg-success"></i>To make the buying and selling of real estate
              as cost-effective as possible, while
              maintaining the highest level of service. <br>
              <i class="bx bx-pointer mb-1 bg-success"></i>
              To provide accurate and up-to-date information
              skilled analysis and sound real estate advice. 
              <br><i class="bx bx-pointer mb-1 bg-success"></i>
              To continually explore new ideas and
              technology, to make the selling and buying of
              real estate faster, less costly, and easier
            <br>To build our country together
            </span>   
            <div class="d-grid d-sm-flex p-3 border">
              <img src="{{asset('assets/img/illustrations/vission.jpg')}}" alt="collapse-image" height="125" class="me-4 mb-sm-0 mb-2">
              <span>
              <br>
              <i class="bx bx-pointer mb-1 bg-success"></i>Our vision is to always strive to be the #1 real estate team in the Rwanda." and to help our team 
              members become the best that they can. Moreover, to give our customers the respect and service 
              they deserve, and the results they expect.
            </span>                    
        </div>  
        
        </div>
      </div>
    </div>
    
  </div>
  @endsection