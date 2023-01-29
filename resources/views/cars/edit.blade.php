@extends('layouts/contentNavbarLayout')

@section('title', ' Cars-')

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Easy Estate Rwanda/</span>Car Rental and Sell</h4>

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
        <form class="form form-vertical" method="POST" action="/admin-cars/{{ $car->id }}" enctype="multipart/form-data">
            @method('PATCH')
            {{ csrf_field() }}
            
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Car Name</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-car"></i></span>
                <input type="text" value="{{ $car->car_name }}" name="car_name" class="form-control" placeholder="Rava4">
              </div>
              @if ($errors->has('car_name'))
              <span class="text-danger">{{ $errors->first('car_name') }}</span>
              @endif
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Plate Number</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-car"></i></span>
                <input type="text" value="{{ $car->plate }}" name="plate" class="form-control" placeholder="RAE100C">
              </div>
              @if ($errors->has('plate'))
              <span class="text-danger">{{ $errors->first('plate') }}</span>
              @endif
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Car Owner names</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-user"></i></span>
                <input type="text" value="{{ $car->owner }}"name="owner" id="basic-icon-default-company" class="form-control">
              </div>
              @if ($errors->has('owner'))
              <span class="text-danger">{{ $errors->first('owner') }}</span>
              @endif
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                <input type="text" value="{{ $car->email }}" name="email" id="basic-icon-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-icon-default-email2" />
                <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
              </div>
              @if ($errors->has('email'))
              <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-phone">telephone Number</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                <input type="text" value="{{ $car->telephone }}" name="telephone" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" />
              </div>
              @if ($errors->has('telephone'))
              <span class="text-danger">{{ $errors->first('telephone') }}</span>
              @endif
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message">Province</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-building"></i></span>
               <select name="province" id="" class="form-control">
                <option value="{{ $car->province }}">{{ $car->province }}</option>
                <option value="City of Kigali">City of Kigali</option>
                <option value="Southern">Southern Province</option>
                <option value="Nothern">Nothern Province</option>
                <option value="Eastern">Eastern Province</option>
                <option value="Western">Western Province</option>
                
               </select>
            </div>
              @if ($errors->has('province'))
              <span class="text-danger">{{ $errors->first('province') }}</span>
              @endif
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message">District</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-building"></i></span>
                <input type="text" value="{{ $car->district }}" name="district" class="form-control" placeholder="Gasabo" aria-label="" aria-describedby="basic-icon-default-building"/>
              </div>
              @if ($errors->has('district'))
              <span class="text-danger">{{ $errors->first('district') }}</span>
              @endif
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message">Will used for</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-car"></i></span>
                <select name="usage" id="" class="form-control">
                    <option value="{{ $car->usage }}" >{{ $car->usage }}</option>
                    <option value="Rent">Renting</option>
                    <option value="Sale">For Sales</option>
                </select>
            </div>
            @if ($errors->has('usage'))
            <span class="text-danger">{{ $errors->first('usage') }}</span>
            @endif
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message">Front Image</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-building"></i></span>
                <input type="file" name="front_image" class="form-control text-success" placeholder="Gasabo" aria-label="" aria-describedby="basic-icon-default-building"/>
              </div>
              @if ($errors->has('front_image'))
              <span class="text-danger">{{ $errors->first('front_image') }}</span>
              @endif
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-file">Side Image</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-file"></i></span>
                <input type="file" name="side_image" class="form-control text-success" placeholder="Gasabo" aria-label="" aria-describedby="basic-icon-default-building"/>
              </div>
              @if ($errors->has('side_image'))
              <span class="text-danger">{{ $errors->first('side_image') }}</span>
              @endif
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message">View 1</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-file"></i></span>
                <input type="file" name="view_1" class="form-control text-success" placeholder="Gasabo" aria-label="" aria-describedby="basic-icon-default-building"/>
              </div>
              @if ($errors->has('view_1'))
              <span class="text-danger">{{ $errors->first('view_1') }}</span>
              @endif
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message">View 2</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-file"></i></span>
                <input type="file" name="view_2" class="form-control text-success" placeholder="Gasabo" aria-label="" aria-describedby="basic-icon-default-building"/>
              </div>
              @if ($errors->has('view_2'))
              <span class="text-danger">{{ $errors->first('view_2') }}</span>
              @endif
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 form-label" for="basic-icon-default-message">Price in RWF</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-money"></i></span>
                <input type="text" value="{{ $car->price }}" name="price" class="form-control text-success" placeholder="6000" aria-label="" aria-describedby="basic-icon-default-building"/>
              </div>
              @if ($errors->has('price'))
              <span class="text-danger">{{ $errors->first('price') }}</span>
              @endif
            </div>
          </div>

          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Save Data</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
