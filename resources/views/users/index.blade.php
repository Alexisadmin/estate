@extends('layouts/contentNavbarLayout')

@section('title', 'Users-')

@section('content')
<h5 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">EER /</span> Registered users
</h5>
<!-- Contextual Classes -->
<div class="pull-right">
  <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
</div>
<br>
<div class="card">
  @if (Session::get('success'))
  <div class="alert alert-success" role="alert">
      {{ Session::get('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
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
          <th>Email</th>
          <th>Roles</th>
        </tr>
      </thead>
      @foreach ($data as $key => $user)
      <tbody class="table-border-bottom-0">
        <tr class="table-default">
          <td><i class="fab fa-sketch fa-lg text-warning me-3"></i> <strong>{{ ++$key }}</strong></td>
          <td>{{$user->name }}</td>
          <td>
           {{ $user->email }}
          </td>
          <td><span class="badge bg-label-primary me-1">
            @if(!empty($user->getRoleNames()))
            @foreach($user->getRoleNames() as $v)
               <label class="badge badge-success">{{ $v }}</label>
            @endforeach
          @endif</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('users.edit',$user->id) }}"><i class="bx bx-edit-alt me-1"></i> show</a>
                <a class="dropdown-item" href="{{ route('users.edit',$user->id) }}"><i class="bx bx-trash me-1"></i> Edit</a>

                 {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'class'=>'dropdown-item']) !!}
         
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
