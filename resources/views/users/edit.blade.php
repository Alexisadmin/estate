@extends('layouts/contentNavbarLayout')

@section('title', 'Register User ')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection


@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">

      <!-- Register Card -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <img src="{{ asset('assets/img/logo/state.jpeg') }}" style="border-radius:2px;with:100px; height:100px" >
            <h4 class="mb-2 float-center">Edit User</h4>
          </div>
          @if ($errors->any())
          <div class="alert alert-danger">
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
          
          
         {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
         
            <div class="mb-3">
              <label for="username" class="form-label">Names</label>
              {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
            </div>
            <div class="mb-3 form-password-toggle">
              <label class="form-label" for="password">Password</label>
              <div class="input-group input-group-merge">
                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
              <div class="mb-3 form-password-toggle">
                <label class="form-label" for="password">Confirm Password</label>
                <div class="input-group input-group-merge">
                    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              
            </div>
            <div class="mb-3 form-password-toggle">
                <label class="form-label" for="password">Roles</label>
                <div class="input-group input-group-merge">
                   
                    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control')) !!}
                </div>
            </div>
            <button class="btn btn-primary d-grid w-100">
              Sign up
            </button>
          </form>

          {{-- <p class="text-center">
            <span>Already have an account?</span>
            <a href="{{url('login')}}">
              <span>Sign in instead</span>
            </a>
          </p> --}}
        </div>
      </div>
    </div>
    <!-- Register Card -->
  </div>
</div>
</div>
@endsection
