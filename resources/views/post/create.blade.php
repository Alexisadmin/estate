@extends('layouts/contentNavbarLayout')

@section('title', 'Car-')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Easy Estate Rwanda/</span>Add Home Page Content</h4>

<!-- Basic Layout & Basic with Icons -->
<div class="row">

  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        @if (Session::get('success'))
                  <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                    <button type="button" class="btn-close pull-right" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                  </div>
                @endif
        </div>
      <div class="card-body">
        <form class="form form-vertical" method="POST" action="/posts" enctype="multipart/form-data">
            {{ csrf_field() }}

            
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Title</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-file"></i></span>
                <input type="text" name="title" class="form-control" placeholder="New car arrival">
              </div>
              @if ($errors->has('title'))
              <span class="text-danger">{{ $errors->first('title') }}</span>
              @endif
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Details</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-file"></i></span>
                <input type="text" name="detail" class="form-control" placeholder="New car arrivall now please contact us for more information">
              </div>
              @if ($errors->has('detail'))
              <span class="text-danger">{{ $errors->first('detail') }}</span>
              @endif
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Status</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-file"></i></span>
               <select name="status" id="" class="form-control">
                <option value="Post">Post Now</option>
                <option value="wait">Not not</option>
               </select>
            </div>
              @if ($errors->has('status'))
              <span class="text-danger">{{ $errors->first('status') }}</span>
              @endif
            </div>
          </div>
          
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message">Image</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-image"></i></span>
                <input type="file" name="image" class="form-control text-success" placeholder="Gasabo" aria-label="" aria-describedby="basic-icon-default-building"/>
              </div>
              @if ($errors->has('image'))
              <span class="text-danger">{{ $errors->first('image') }}</span>
              @endif
            </div>

          </div>
          <input type="submit"  class="btn btn-primary mr-1 mb-1" value="save data">
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
