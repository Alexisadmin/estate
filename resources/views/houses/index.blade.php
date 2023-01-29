@extends('layouts/contentNavbarLayout')

@section('title', 'House- ')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Easy Estate Rwanda /</span> Available Houses 
</h4>


<!-- Responsive Table -->
<div class="card">
  <h5 class="card-header">Available Houses for sales and Rent</h5>
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
          <th>Names</th>
          <th>Province</th>
          <th>District</th>
          <th>Sector</th>
          <th>Cell</th>
          <th>Vilage</th>
          <th>Email</th>
          <th>Number of Rooms</th>          
          <th>Number of salon</th>
          <th>Price</th>
          <th>front_image</th>
          <th>side_image</th>
          <th>View-1</th>
          <th>View-2</th>    
        </tr>
      </thead>
      @foreach ($houses as $key=> $house)
      <tbody>
        <tr>
          <th scope="row">{{ ++$key }}</th>
          <td>{{ $house->name }} {{ $house->surname }} </td>
          <td>{{ $house->province }}</td>
          <td>{{ $house->district }}</td>
          <td>{{ $house->sector }}</td>
          <td>{{ $house->cell }}</td>
          <td>{{ $house->village }}</td>
          <td>{{ $house->email }}</td>
          <td>{{ $house->bedroom + $house->bathroom }}</td>
          <td>{{ $house->salon }}</td>        
          <td>{{ $house->price }}</td>
          <td>
          <div class="media align-items-center">
            <a class="media-left mr-50" href="#">
              <img src="{{ asset('uploads/' . $house->front_image) }}" alt="front_image"
                class="rounded" height="30" width="30">
            </a>
          </div>
        </td>

        <td class="pr-75">
          <div class="media align-items-center">
            <a class="media-left mr-50" href="#">
              <img src="{{ asset('uploads/' . $house->side_image) }}" alt="side_image"
                class="rounded" height="30" width="30">
            </a>
          </div>
        </td>

        <td class="pr-75">
          <div class="media align-items-center">
            <a class="media-left mr-50" href="#">
              <img src="{{ asset('uploads/' . $house->view_1) }}" alt="view_1"
                class="rounded" height="30" width="30">
            </a>
          </div>
        </td>

        <td class="pr-75">
          <div class="media align-items-center">
            <a class="media-left mr-50" href="#">
              <img src="{{ asset('uploads/' . $house->view_2) }}" alt="view_2"
                class="rounded" height="30" width="30">
            </a>
          </div>
        </td>

          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                @can('edit-house')
                <a class="dropdown-item warning " href="/admin-houses/{{Crypt::encrypt($house['id'])}}/edit">Edit</a>
                @endcan
                
                @can('delete-house')

                {!! Form::open(['method' => 'DELETE','route' => ['admin-houses.destroy', Crypt::encrypt($house['id'])],'class'=>'dropdown-item']) !!}
         
                {!! Form::submit('Delete', ['class' => 'text-danger']) !!}
    
            {!! Form::close() !!}
                  
                
               @endcan
            
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
