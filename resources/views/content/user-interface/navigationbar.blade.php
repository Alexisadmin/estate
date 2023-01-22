@extends('layouts/blankLayout')


{{-- <h5 class="pb-1 mt-5 mb-4">Example</h5> --}}
<nav class="navbar navbar-expand-lg navbar-light bg-primary mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="/home">
      <img src="{{ asset('assets/img/logo/state.jpeg') }}" style="border-radius:2px;with:100px; height:30px" >
      <strong>Easy Estate Rwanda</strong>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/plot">Plots</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/house"> <i class="bx bxl-adobe mb-2"></i>Houses for Sales</a>
        </li>
        <box-icon type='solid' name='building-house'></box-icon>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Contact</a>
        </li>
       
      
      </ul>
      <li class="d-flex">
        <a class="" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Login
        </a>
        
      </li>
    </div>
  </div>
</nav>

</div>

