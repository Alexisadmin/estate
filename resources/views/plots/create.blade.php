@extends('layouts/contentNavbarLayout')

@section('title', 'Plot')


@section('content')

<section id="basic-vertical-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          
        </div>
        <div class="card-content">
          <div class="card-body">
            <form class="form form-vertical" method="POST" action="/admin-plots" enctype="multipart/form-data">
              {{ csrf_field() }}

              <div class="form-row mb-50">
                @if (Session::get('success'))
                  <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                    <button type="button" class="btn-close pull-right" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                  </div>
                @endif
              </div>

              <div class="form-body">
                <div class="row">
                  <div class="col-6">
                      <div class="form-group">
                        <label for="first-name-vertical">Owner Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" id="" class="form-control">
                     </div>
                     @if ($errors->has('name'))
                     <span class="text-danger">{{ $errors->first('name') }}</span>
                     @endif 
                  </div>
                  <div class="col-md-6">
                    <label for="first-name-vertical">Owner Surname</label>
                    <div class="form-group">
                      <input type="text" name="surname" value="{{ old('name') }}" id="" class="form-control">
                    </div>
                    @if ($errors->has('surname'))
                    <span class="text-danger">{{ $errors->first('surname') }}</span>
                    @endif 
                  </div> 

                  <div class="col-6">
                    <div class="form-group">
                      <label for="first-name-vertical">Province</label> <small>where plot is located</small>
                      <input type="text" name="province" value="{{ old('name') }}" id="" class="form-control">
                   </div>
                   @if ($errors->has('province'))
                   <span class="text-danger">{{ $errors->first('province') }}</span>
                   @endif 
                </div>
                <div class="col-md-6">
                  <label for="first-name-vertical">District</label>
                  <div class="form-group">
                    <input type="text" name="district" value="{{ old('name') }}" id="" class="form-control">
                  </div>
                  @if ($errors->has('district'))
                  <span class="text-danger">{{ $errors->first('district') }}</span>
                  @endif 
                </div>
                <div class="col-md-6">
                  <label for="first-name-vertical">Sector</label>
                  <div class="form-group">
                    <input type="text" name="sector" value="{{ old('name') }}" id="" class="form-control">
                  </div>
                  @if ($errors->has('sector'))
                  <span class="text-danger">{{ $errors->first('sector') }}</span>
                  @endif 
                </div>
                <div class="col-md-6">
                  <label for="first-name-vertical">Cell</label>
                  <div class="form-group">
                    <input type="text" name="cell" value="{{ old('name') }}" id="" class="form-control">
                  </div>
                  @if ($errors->has('cell'))
                  <span class="text-danger">{{ $errors->first('cell') }}</span>
                  @endif 
                </div>
                <div class="col-md-6">
                  <label for="first-name-vertical">Village</label>
                  <div class="form-group">
                    <input type="text" name="village" value="{{ old('name') }}" id="" class="form-control">
                  </div>
                  @if ($errors->has('village'))
                  <span class="text-danger">{{ $errors->first('village') }}</span>
                  @endif 
                </div>

                <div class="col-md-6">
                  <label for="first-name-vertical">Telephon Number</label>
                  <div class="form-group">
                    <input type="text" name="telephone" value="{{ old('name') }}" id="" class="form-control">
                  </div>
                  @if ($errors->has('telephone'))
                  <span class="text-danger">{{ $errors->first('telephone') }}</span>
                  @endif
                </div>
                <div class="col-md-6">
                  <label for="first-name-vertical">Email</label>
                  <div class="form-group">
                    <input type="text" name="email" value="{{ old('name') }}" id="" class="form-control">
                  </div>
                  @if ($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
                </div>

                <div class="col-md-6">
                  <label for="first-name-vertical">Width</label>
                  <div class="form-group">
                    <input type="text" name="width" value="{{ old('name') }}" id="" class="form-control">
                  </div>
                  @if ($errors->has('width'))
                  <span class="text-danger">{{ $errors->first('width') }}</span>
                  @endif
                </div>
                <div class="col-md-6">
                  <label for="first-name-vertical">Length</label>
                  <div class="form-group">
                    <input type="text" name="length" value="{{ old('name') }}" id="" class="form-control">
                  </div>
                  @if ($errors->has('length'))
                  <span class="text-danger">{{ $errors->first('length') }}</span>
                  @endif
                </div>
                  <div class="col-md-6">
                  <label for="first-name-vertical">Price </label> <small>in RWF</small>
                  <div class="form-group">
                    <input type="text" name="price" value="{{ old('name') }}" id="" class="form-control">
                  </div>
                  @if ($errors->has('price'))
                  <span class="text-danger">{{ $errors->first('price') }}</span>
                  @endif
                </div>

                  <div class="col-6">
                    <div class="form-group">
                      <label for="first-name-vertical">Front Image</label>
                        <input type="file" name="front_image" value="" id="" class="form-control text-success">
                    </div>
                    @if ($errors->has('front_image'))
                    <span class="text-danger">{{ $errors->first('front_image') }}</span>
                    @endif
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="first-name-vertical">Side Image</label>
                        <input type="file" name="side_image" value="" id="" class="form-control text-success text-success">
                    </div>
                    @if ($errors->has('side_image'))
                  <span class="text-danger">{{ $errors->first('side_image') }}</span>
                  @endif
                  </div>

                   <div class="col-6">
                    <div class="form-group">
                      <label for="first-name-vertical">View-1</label>
                        <input type="file" name="view_1" value="" id="" class="form-control text-success">
                    </div>
                    @if ($errors->has('view_1'))
                  <span class="text-danger">{{ $errors->first('view_1') }}</span>
                  @endif
                  </div>
                   <div class="col-6">
                    <div class="form-group">
                      <label for="first-name-vertical">View-2</label>
                        <input type="file" name="view_2" value="" id="" class="form-control text-success">
                    </div>
                    @if ($errors->has('view_2'))
                  <span class="text-danger">{{ $errors->first('view_2') }}</span>
                  @endif
                  </div>
                  <br>
<hr>
                <div class="col-6">
                 <div class="form-group">
                    <input type="submit"  class="btn btn-warning mr-1 mb-1" value="Submit">
                </div>


                </div>



              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





@endsection
