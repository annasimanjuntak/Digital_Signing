@extends('layouts.main')

@section('container')
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
        <div class="col">
            <div class="card">
            <iframe src="./files/{{ $doc->path }}" frameborder="0"></iframe>
            <div class="card-body" >
                <h5 class="card-title">{{ $doc->file_name }}</h5>
                <p class="card-text" style="font-weight: bold">{{ $doc->status }}</p>
                <p class="card-text">Uploaded at {{ $doc->created_at }}</p>
            </div>
            </div>
        </div>
        </div>
@endsection
