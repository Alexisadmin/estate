@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard-')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-8 mb-4 order-0">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <center>
              <h5 class="card-title text-secondary">Sold plots</h5>
              <h5> <strong class="text-warning float-center">{{number_format(DB::table('plots')->where('status','sold')->count())}}</strong> 
          
            </center>
         
          @can('user-create')
                      <p class="mb-0"> 
                        Users <br>
            <span class="fw-bold float-right">{{number_format(DB::table('users')->count())}}</span>  </p> 
            @endcan
           
               <p class="text-success sub">subscribers <br>
              <span class="text-warning">  {{number_format(DB::table('subscribes')->count())}}</span>
               </p> 
              
      @can('dashboard-details')
      <a href="admin-plots/" class="btn btn-sm btn-outline-primary">View more</a>
      @endcan
            
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="{{asset('assets/img/illustrations/man-with-laptop-light.png')}}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 order-1">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('assets/img/icons/unicons/wait.jpg')}}" alt="waited for sale" class="rounded">
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                 @can('dashboard-details')          
                 <a class="dropdown-item" href="admin-plots">View More</a>
                  @endcan 
                  {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                </div>
              </div>
            </div>
            <span class="fw-semibold d-block mb-1">Plot waiting for sale</span>
            <h3 class="card-title mb-2">

              {{number_format(DB::table('plots')->where('status','waiting')->count())}} 
            </h3>
            {{-- <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i> +72.80%</small> --}}
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('assets/img/icons/unicons/sale.jpg')}}" alt="Credit Card" class="rounded">
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                  @can('dashboard-details') 
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  @endcan
                  {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                </div>
              </div>
            </div>
            <span> House for Sales</span>
            <h3 class="card-title text-nowrap mb-1">
              {{number_format(DB::table('houses')->where('housing_type','Rent')->count())}} 
            </h3>
            {{-- <small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i> +28.42%</small> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Total Revenue -->
  <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
    <div class="card">
      <div class="row row-bordered g-0">
        <div class="col-md-8">
          <h5 class="card-header m-0 me-2 pb-3">All Houses    <strong class="text-warning">   {{number_format(DB::table('houses')->count())}}</strong></h5>
    
          <img src="{{asset('assets/img/icons/unicons/wait2.jpg')}}"  alt="Credit Card" style="width:100%;height:100%">
        users
        </div>
        <div class="col-md-4">
          <div class="card-body">
            
          </div>
          <div id="">
            
          </div>
          <div class="text-center fw-semibold pt-3 mb-2">Houses Available for Sales <br>
          <strong class="text-warning">  {{number_format(DB::table('houses')->where('housing_type','Sale')->count())}} </strong> 
          </div>
          <div class="text-center fw-semibold pt-3 mb-2">Total houses Rent This Year <br>
            <strong class="text-warning">  {{number_format(DB::table('houses')->where('housing_type','Rent')->count())}} </strong> 
            </div>
          
        </div>
      </div>
    </div>
  </div>
  <!--/ Total Revenue -->
  <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
    <div class="row">
      <div class="col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                {{-- <img src="{{asset('assets/img/icons/unicons/paypal.png')}}" alt="Credit Card" class="rounded"> --}}
                <i class='bx bx-car' class="rounded text-primary"></i>
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded "></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                  @can('dashboard-details') 
                  <a class="dropdown-item" href="/admin-cars">View More</a>
                 @endcan
                </div>
              </div>
            </div>
            <span class="d-block mb-1">Cars</span>
            <h3 class="card-title text-nowrap mb-2"> <br>
            <strong class="text-warning">  {{number_format(DB::table('cars')->count())}}</strong>
            </h3>
            {{-- <small class="text-danger fw-semibold"><i class='bx bx-down-arrow-alt'></i> -14.82%</small> --}}
          </div>
        </div>
      </div>
      <div class="col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="{{asset('assets/img/icons/unicons/cc-primary.png')}}" alt="Credit Card" class="rounded">
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="cardOpt1">
                  @can('dashboard-details') 
                  <a class="dropdown-item" href="admin-cars">View More</a>
                  @endcan
                  {{-- <a class="dropdown-item" href="javascript:void(0);">Delete</a> --}}
                </div>
              </div>
            </div>
            <span class="fw-semibold d-block mb-1">Available Cars for Rent</span>
            <h3 class="card-title mb-2">
            <strong class="text-warning"> <strong class="text-warning"> {{number_format(DB::table('cars')->where('usage','Rent')->count())}} </strong> </strong>
            </h3>
            {{-- <small class="text-success fw-semibold">< class='bx bx-up-arrow-alt'></small> --}}
          </div>
        </div>
      </div>
      <!-- </div>
    <div class="row"> -->
      <div class="col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
              <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                <div class="card-title">
                  <h5 class="text-nowrap mb-2">Available Cars for Rent</h5>
                  {{-- <span class="badge bg-label-warning rounded-pill">Year 2021</span> --}}
                  <h3 class="mb-0">
                    {{number_format(DB::table('cars')->where('usage','Sale')->count())}}
                  </h3>
                </div>
                <div class="mt-sm-auto">
                  {{-- <small class="text-success text-nowrap fw-semibold"><i class='bx bx-chevron-up'></i> 68.2%</small> --}}
               
                </div>
              </div>
              {{-- <div id="profileReportChart"></div> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
