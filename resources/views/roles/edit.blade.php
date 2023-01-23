@extends('layouts/contentNavbarLayout')

@section('title', 'Edit Roles ')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection


@section('content')
<!-- users edit start -->
<section class="users-edit">

    <div class="card">
        <div class="card-content">
            <div class="card-body">

                <ul class="nav nav-tabs mb-2" role="tablist">
                    <li class="nav-item">
                        <h4 id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                            <span class="d-none d-sm-block">Setting up role</span>
                        </h1>
                    </li>
                </ul>

                @if ($errors->any())
                    <div class="alert alert-danger " width="30">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
        
                {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-sm-12">
                            <div class="form-group">

                                <label>Name</label>
                                <div class="row">
                                    <div class="col-xl-5 col-lg-5 col-sm-12">
                                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                    </div>
                                </div>
                                <br>

                                <span class="d-none d-sm-block">Assign unssign  permission to the role</span><hr>
                                <div class="form-group">
                                    <div class="row">
                                        @foreach($permission as $value)
                                            <div class="col-md-3">
                                                <label>
                                                    {{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                                    {{ $value->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div><hr>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 ">Save changes</button>
                                <button href="{{route('roles.index')}}" class="btn btn-warning">Cancel</button>
                            </div>

                        </div>
                    </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
         
@endsection
