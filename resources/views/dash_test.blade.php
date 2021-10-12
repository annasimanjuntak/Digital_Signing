@extends('layouts.main')
@section('container')
        <div class="card-group">



          <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
          @foreach ($data as $doc)
            <div class="col">
              <div class="card h-100">
                <iframe src="{{ asset('storage/'. $doc->path) }}" frameborder="0"></iframe>
                <div class="card-body">
                  <h5 class="card-title"><a href="docs/{{ $doc->id }}" class="text-decoration-none text-dark">{{ $doc->file_name }}</a></h5>
                  <p class="card-text" style="font-weight: bold">{{ $doc->status }}</p>
                  <p class="card-text">Uploaded at {{ $doc->created_at }}</p>
                </div>
              </div>
            </div>
          @endforeach
          </div>

@endsection
