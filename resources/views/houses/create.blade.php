@extends('layouts/contentNavbarLayout')

@section('title', 'Houses-')


@section('content')

<section id="basic-vertical-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          
        </div>
        <div class="card-content">
          <div class="card-body">
            <form class="form form-vertical" method="POST" action="/admin-houses" enctype="multipart/form-data">
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
                      <label for="first-name-vertical">Province</label> <small>where house is located</small>
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
                  <label for="first-name-vertical">Telephone Number</label>
                  <div class="form-group">
                    <input type="number" name="telephone" value="{{ old('name') }}" id="" class="form-control">
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
                     <label for="first-name-vertical">Housing type</label>
                   <div class="form-group">
                     
                    <select name="housing_type" id="" class="form-control ">
                        <option value="" disabled selected>Select ...</option>
                        <option value="Sale">Sale</option>
                        <option value="Rent">Rent</option>
                    </select>
                    </div>
                    @if ($errors->has('housing_type'))
                    <span class="text-danger">{{ $errors->first('housing_type') }}</span>
                    @endif
                  </div>

                <div class="col-md-6">
                  <label for="first-name-vertical">Number of BedRoom</label>
                  <div class="form-group">
                    <input type="number" name="bedroom" value="{{ old('name') }}" id="" class="form-control">
                  </div>
                  @if ($errors->has('bedroom'))
                  <span class="text-danger">{{ $errors->first('bedroom') }}</span>
                  @endif
                </div>
                <div class="col-md-6">
                  <label for="first-name-vertical">Number of bathroom</label>
                  <div class="form-group">
                    <input type="number" name="bathroom" value="{{ old('name') }}" id="" class="form-control">
                  </div>
                  @if ($errors->has('bathroom'))
                  <span class="text-danger">{{ $errors->first('bathroom') }}</span>
                  @endif
                </div>
                <div class="col-md-6">
                    <label for="first-name-vertical">Number of salon</label>
                    <div class="form-group">
                      <input type="number" name="salon" value="{{ old('name') }}" id="" class="form-control">
                    </div>
                    @if ($errors->has('salon'))
                    <span class="text-danger">{{ $errors->first('salon') }}</span>
                    @endif
                  </div>
                  <div class="col-md-6">
                    <label for="first-name-vertical">Is house nearest city</label>
                    <div class="form-group">
                     <select name="nearest_city" class="form-control select2">
                        <option value="" disabled selected>Select ...</option>
                        <option value="No">No</option>
                        <option value="Yes">Yes</option>
                     </select>
                    </div>
                    @if ($errors->has('nearest_city'))
                    <span class="text-danger">{{ $errors->first('nearest_city') }}</span>
                    @endif
                  </div>
                  <div class="col-md-6">
                    <label for="first-name-vertical">Is this House Near Road</label>
                    <div class="form-group">
                     <select name="nearest_road" class="form-control select2">
                        <option value=""disabled selected class="text-success">Select ...</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                     </select>
                    </div>
                    @if ($errors->has('nearest_road'))
                    <span class="text-danger">{{ $errors->first('nearest_road') }}</span>
                    @endif
                  </div>
                  <div class="col-md-6">
                  <label for="first-name-vertical">Price </label> <small>in RWF</small>
                  <div class="form-group">
                    <input type="number" name="price" value="{{ old('name') }}" id="" class="form-control">
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
