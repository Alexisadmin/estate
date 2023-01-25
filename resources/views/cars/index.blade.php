@extends('layouts/contentNavbarLayout')

@section('title', 'Plots- ')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Easy Estate Rwanda /</span> Available Cars 
</h4>


<!-- Responsive Table -->
<div class="card">
  <h5 class="card-header">Available Car for sales and Rent</h5>
  @if (Session::get('success'))
  <div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
    <button type="button" class="btn-close float-right" data-bs-dismiss="alert" aria-label="Close">
    </button>
  </div>
@endif
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr class="text-nowrap">
          <th>#</th>
          <th>car name</th>
          <th>plate</th>
          <th>Usage</th>
          <th>Province</th>
          <th>District</th>
          <th>Owner</th>
          <th>telephone</th>         
          <th>Email</th>
          <th>price</th>         
        
          <th>front_image</th>
          <th>side_image</th>
          <th>View-1</th>
          <th>View-2</th>    
        </tr>
      </thead>
      @foreach ($cars as $key=> $car)
      <tbody>
        <tr>
          <th scope="row">{{ ++$key }}</th>
          <td>{{ $car->car_name }} </td>
          <td>{{ $car->plate }} </td>
          <td>{{ $car->usage }}</td>
          <td>{{ $car->province }}</td>
          <td>{{ $car->district }}</td>
          <td>{{ $car->owner }}</td>
          <td>{{ $car->telephone }}</td>          
          <td>{{ $car->email }}</td>
          <td>{{ $car->price }}</td>          
         
          <td>
          <div class="media align-items-center">
            <a class="media-left mr-50" href="#">
              <img src="{{ asset('uploads/' . $car->front_image) }}" alt="front_image"
                class="rounded" height="30" width="30">
            </a>
          </div>
        </td>

        <td class="pr-75">
          <div class="media align-items-center">
            <a class="media-left mr-50" href="#">
              <img src="{{ asset('uploads/' . $car->side_image) }}" alt="side_image"
                class="rounded" height="30" width="30">
            </a>
          </div>
        </td>

        <td class="pr-75">
          <div class="media align-items-center">
            <a class="media-left mr-50" href="#">
              <img src="{{ asset('uploads/' . $car->view_1) }}" alt="view_1"
                class="rounded" height="30" width="30">
            </a>
          </div>
        </td>

        <td class="pr-75">
          <div class="media align-items-center">
            <a class="media-left mr-50" href="#">
              <img src="{{ asset('uploads/' . $car->view_2) }}" alt="view_2"
                class="rounded" height="30" width="30">
            </a>
          </div>
        </td>

          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                {{-- @can('edit-car') --}}
                <a class="dropdown-item warning " href="/admin-cars/{{Crypt::encrypt($car['id'])}}/edit">Edit</a>
                {{-- @endcan --}}
                
                {{-- @can('delete-car') --}}

                {!! Form::open(['method' => 'DELETE','route' => ['admin-cars.destroy', Crypt::encrypt($car['id'])],'class'=>'dropdown-item']) !!}
         
                {!! Form::submit('Delete', ['class' => 'text-danger']) !!}
    
            {!! Form::close() !!}
                  
                
               {{-- @endcan --}}
            
              </div>
            </div>
          </td>
        </tr>
   
      </tbody>
     
      @endforeach
    </table>
  </div>
</div>

@endsection
