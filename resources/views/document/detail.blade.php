@extends('layouts.main')
@section('content')

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('success')}}</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
        @endif
       
        <div class="container">
  <!-- Content here -->

            <div class="col-md-8">
            <iframe src="{{asset($detail->path)}}" frameborder="0" width=900 height =600  ></iframe>
            </div>
            <div class="col-md-4">
            <div class="card-body">
            <h5 class="card-title"><a href="docs/{{ $detail->id }}" class="text-decoration-none text-dark">{{ $detail->file_name }}</a></h5>
                  <p class="card-text">Uploaded at {{ $detail->created_at }}</p>
                  <p class="card-text">Uploaded by {{ $detail->name}}</p>
                  <p class="card-text">Exp at {{ $detail->expired}}</p>
            </div>
       </div>    
</div>@endsection