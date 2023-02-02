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
            <h4 class="mb-2 float-center">User Registration</h4>
          </div>
          @if ($errors->any())
          <div class="alert alert-danger">
              <strong>Whoops!</strong><br>
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      
                  @endforeach
              </ul>
              <button type="button" class="btn-close pull-right" data-bs-dismiss="alert" aria-label="Close">
              </button>
          </div>
      @endif
          
          
          {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}  
          {{ csrf_field() }}
          <div class="mb-3">
              <label for="username" class="form-label">Names</label>
              <input type="text" class="form-control" id="username" name="name" placeholder="Enter your Names" autofocus>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
            </div>
            <div class="mb-3 form-password-toggle">
              <label class="form-label" for="password">Password</label>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
              </div>
              <div class="mb-3 form-password-toggle">
                <label class="form-label" for="password">Confirm Password</label>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" name="confirm-password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              
            </div>
            <div class="mb-3 form-password-toggle">
                <label class="form-label" for="password">Roles</label>
               <div class="controls">
                                            
                <select name="roles" id="" class="form-control">
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <button class="btn btn-primary d-grid w-100">
           Change
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
