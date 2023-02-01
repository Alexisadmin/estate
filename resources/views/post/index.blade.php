@extends('layouts/contentNavbarLayout')

@section('title', 'Post- ')

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Easy Estate Rwanda /</span> Available Post on home page
</h4>


<!-- Responsive Table -->
<div class="card">
  <h5 class="card-header">Posted</h5>
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
          <th>Title</th>
          <th>Deatail</th>
          <th>Status</th>
          <th>Image</th>                
        </tr>
      </thead>
      @foreach ($posts as $key=> $post)
      <tbody>
        <tr>
          <th scope="row">{{ ++$key }}</th>
          <td>{{ $post->title }} </td>
          <td>{{ $post->detail }}</td>
          <td>{{ $post->status }}</td>
          
          <td>
          <div class="media align-items-center">
            <a class="media-left mr-50" href="#">
              <img src="{{ asset('uploads/' . $post->image) }}" alt="image"
                class="rounded" height="30" width="30">
            </a>
          </div>
        </td>

     

          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                @can('homepage-post')
                <a class="dropdown-item warning " href="/posts/{{Crypt::encrypt($post['id'])}}/edit">Edit</a>
   
                @endcan
                
                @can('remove-homepage-post')
                {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', Crypt::encrypt($post['id'])],'class'=>'dropdown-item']) !!}
         
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
<!--/ Responsive Table -->
@endsection
