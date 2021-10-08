@extends('layouts.main')
@section('content')
<div class="container mt-4">

  <h2 class="text-center">File Upload</h2>
      @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{session('success')}}</strong> 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                      

      <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ route('store') }}" >
        @csrf
          <div class="row">
            <div class="mb-3">
                <label for="expiredate" class="form-label">Expire Date</label>
                <input type="date" class="form-control" id="expiredate" name="expired" placeholder="name@example.com" required>
            </div>



            <div class="mb-3">
                <label for="file" class="form-label">Input File</label>
                <input class="form-control" type="file" id="file" name="file" required>
            </div>

            <div class="mb-3">
                <label for="file" class="form-label">Signing Participation Type</label>
                <select class="form-select" name="signing_participation_type" aria-label="Default select example">
                  <option selected>Open this select Type</option>
                  <option value="Me Only">Me Only</option>
                  <option value="Me and Others">Me and Others</option>
                  <option value="Others Only">Others Only</option>
                </select>
            </div>

              <div class="col-md-12">
                  <button type="submit" class="btn btn-primary" id="submit">Submit</button>
              </div>

              @if ($message = Session::get('success'))
              <div class="alert alert-success mt-3">
                  <strong>{{ $message }}</strong>
              </div>
              @endif

              @if (count($errors) > 0)
              <div class="alert alert-danger mt-3">
                  <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif

          </div>
      </form>
</div>
@endsection