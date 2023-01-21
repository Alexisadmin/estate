@extends('layouts/Common' )

@php
/* Display elements */
$contentNavbar = true;
// $containerNav = ($containerNav ?? 'container-xxl');
$isNavbar = ($isNavbar ?? true);
$isMenu = ($isMenu ?? true);
$isFlex = ($isFlex ?? false);
$isFooter = ($isFooter ?? true);
$customizerHidden = ($customizerHidden ?? '');
$pricingModal = ($pricingModal ?? false);

/* HTML Classes */
$navbarDetached = 'navbar-detached';

/* Content classes */

@endphp

@section('layoutContent')
<div class="layout-wrapper layout-content-navbar {{ $isMenu ? '' : 'layout-without-menu' }}">
  <div class="layout-container">
    <!-- Layout page -->
    <div class="layout-page">
    


      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        @if ($isFlex)
        <div class="d-flex align-items-stretch flex-grow-1 p-0">
          @else
          <div class=" flex-grow-1 container-p-y">
            @endif
            
            @yield('content')


          </div>
          <!-- / Content -->

      </div>
      <!-- / Layout page -->
    </div>

   
  @endsection
