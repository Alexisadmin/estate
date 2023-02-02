@extends('layouts/contentNavbarLayout')

@section('title', 'Plots- ')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Easy Estate Rwanda /</span> Available plots
</h4>


<!-- Responsive Table -->
<div class="card">
  <h5 class="card-header">Available Plots</h5>
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
          <th>Vilage</th>
          <th>Front image</th>
          <th>side image</th>
          <th>owner</th>
          <th>price</th>
          <th>width</th>
          <th>Length</th>
          <th>front_image</th>
          <th>side_image</th>
          <th>View-1</th>
          <th>View-2</th>
        
        </tr>
      </thead>
      @foreach ($plots as $key=> $plot)
      <tbody>
        <tr>
          <th scope="row">{{ ++$key }}</th>
          <td>{{ $plot->name }} {{ $plot->surname }} </td>
          <td>{{ $plot->province }}</td>
          <td>{{ $plot->district }}</td>
          <td>{{ $plot->province }}</td>
          <td>{{ $plot->sector }}</td>
          <td>{{ $plot->cell }}</td>
          <td>{{ $plot->village }}</td>
          <td>{{ $plot->width }}</td>
          <td>{{ $plot->length }}</td>
          <td>{{ $plot->email }}</td>
          <td>{{ $plot->price }}</td>
          <td>
          <div class="media align-items-center">
            <a class="media-left mr-50" href="#">
              <img src="{{ asset('uploads/' . $plot->front_image) }}" alt="front_image"
                class="rounded" height="30" width="30">
            </a>
          </div>
        </td>

        <td class="pr-75">
          <div class="media align-items-center">
            <a class="media-left mr-50" href="#">
              <img src="{{ asset('uploads/' . $plot->side_image) }}" alt="side_image"
                class="rounded" height="30" width="30">
            </a>
          </div>
        </td>

        <td class="pr-75">
          <div class="media align-items-center">
            <a class="media-left mr-50" href="#">
              <img src="{{ asset('uploads/' . $plot->view_1) }}" alt="view_1"
                class="rounded" height="30" width="30">
            </a>
          </div>
        </td>

        <td class="pr-75">
          <div class="media align-items-center">
            <a class="media-left mr-50" href="#">
              <img src="{{ asset('uploads/' . $plot->view_2) }}" alt="view_2"
                class="rounded" height="30" width="30">
            </a>
          </div>
        </td>

          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
              @can('edit-plot')            
        
                <a class="dropdown-item warning " href="/admin-plots/{{Crypt::encrypt($plot['id'])}}/edit">Edit</a>
                @endcan
                @can('delete-plot')     
                {!! Form::open(['method' => 'DELETE','route' => ['admin-plots.destroy',Crypt::encrypt($plot['id'])],'class'=>'dropdown-item']) !!}
         
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    
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
<!--/ Responsive Table -->
@endsection
