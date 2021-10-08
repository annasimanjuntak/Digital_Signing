@extends('layouts.main')
@section('content')
        <div>
        <a href="{{route('upload.document')}}">add document</a>
        </div>
        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{session('success')}}</strong> 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
        <div class="card-group">
          <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
          @foreach ($documents as $doc)
            <div class="col">
              <div class="card h-100">
                <iframe src="{{asset($doc->path)}}" frameborder="0" ></iframe>
                <div class="card-body">
                  <h5 class="card-title"><a href="docs/{{ $doc->id }}" class="text-decoration-none text-dark">{{ $doc->file_name }}</a></h5>
                  <p class="card-text">Uploaded at {{ $doc->created_at }}</p>
                  <p class="card-text">Uploaded by {{ $doc->name}}</p>
                  <p class="card-text">Exp at {{ $doc->expired}}</p>
                 <a href="{{url('document/view/'.$doc->id)}}"> <button>view</button></a>
                </div>
              </div>
            </div>
          @endforeach
          </div>
@endsection