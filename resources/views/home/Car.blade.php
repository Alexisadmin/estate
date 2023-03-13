@extends('layouts/blankLayout')

@section('title', 'Easy Estaterwanda')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-misc.css')}}">
@endsection

@section('content')
<!--Under Maintenance -->
<div class="container-xxl container-p-y">
  <div class="misc-wrapper">
    <h2 class="mb-2 mx-2">Comming soon</h2>
    <p class="mb-4 mx-2">
      Dear client Sorry for the inconvenience this service is coming back soon
    </p>
    <a href="{{url('/')}}" class="btn btn-primary">Back to home</a>
    <div class="mt-4">
      <img src="{{asset('../assets/img/coming.gif')}}" alt="comming soon" width="500" class="img-fluid">
    </div>
  </div>
</div>
<!-- /Under Maintenance -->
@endsection
