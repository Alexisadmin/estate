@extends('layouts/contentNavbarLayout')

@section('title', 'Users-')

@section('content')
<h5 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Easy Estate Rwanda /</span> User Roles
</h5>
<!-- Contextual Classes -->
<div class="pull-right">
  <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
</div>
<br>
<div class="card">
  @if (Session::get('success'))
  <div class="alert alert-success" role="alert">
      {{ Session::get('success') }}
      <button type="button" class="btn-close pull-right" data-bs-dismiss="alert" aria-label="Close">
      </button>
  </div>
@endif
<br>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Name</th> 
          <th>Action</th>         
          </tr>
      </thead>
      @foreach ($roles as $key => $role)
      <tbody class="table-border-bottom-0">
        <tr class="table-default">
          <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>{{ ++$key }}</strong></td>
          <td>{{ $role->name}}</td>
        
          
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('roles.show',$role->id) }}"><i class="bx bx-show-alt me-1"></i> show</a>
                <a class="dropdown-item" href="{{ route('roles.edit',$role->id) }}"><i class="bx bx-edit me-1"></i> Edit</a>

                 {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'class'=>'dropdown-item']) !!}
         
                     {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
         
                 {!! Form::close() !!}
         
             </td>


              </div>
            </div>
          </td>
        </tr>
      
      </tbody>
      @endforeach
    </table>
  </div>
</div>
<!--/ Contextual Classes -->

@endsection
