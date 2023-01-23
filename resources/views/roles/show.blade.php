@extends('layouts/contentNavbarLayout')

@section('title', 'Edit Roles ')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection


@section('content')
<!-- users view start -->
<section class="users-view">
  <!-- users view media object start -->
  <div class="row">
    <div class="col-12 col-sm-7">
      <div class="media mb-2">
       
        <div class="media-body pt-25">
          <h4 class="media-heading"><span class="users-view-name">User Roles </span><span
              class="text-muted font-medium-1"> </span><span
              class="users-view-username text-muted font-medium-1 "></span></h4>
          
          
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-5 px-0 d-flex justify-content-end align-items-center px-1 mb-2">
     
      <a href="{{route('roles.index')}}" class="btn btn-primary mr-25">back</a>
      
    </div>
  </div>
  <!-- users view media object ends -->
  <!-- users view card data start -->
  <div class="card">
   <div class="card">
    <div class="card-content">
      <div class="card-body">
        
        <div class="col-12">
          <table class="table table-borderless">
            <tbody>
              <tr>
                
                <td class="users-view-username"></td>
              </tr>
              <tr class="border-bottom">
                <td class="pb-1">Name:</td>
                <td class="pb-1">{{ $role->name }}</td>
              </tr>
              <tr class="border-bottom">
                <td class="py-1">Created On:</td>
                <td class="upy-1">{{ $role->created_at }}</td>
              </tr>
              <tr>
                <td class="pt-1">Roles:</td>
                <td class="pt-1">
                @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
                    <label class="label label-success"><span class="badge bg-label-danger"> {{ $v->name }}</span></label>
                @endforeach
            @endif</td>
              </tr>

            </tbody>
          </table>
          <tbody>
            </tbody>
          </table>
          
          <table class="table table-borderless mb-0">
          <tbody>
          </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- users view card details ends -->

</section>
<!-- users view ends -->
@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/pages/page-users.js')}}"></script>
@endsection