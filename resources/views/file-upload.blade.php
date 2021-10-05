@extends('layouts.main')
@section('container')
<div class="container mt-4">

  <h2 class="text-center">File Upload</h2>

      <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ url('store') }}" >
        @csrf
          <div class="row">

            <div class="mb-3">
                <label for="userId" class="form-label">User ID</label>
                <input type="text" class="form-control" id="userid" name="userid" placeholder="name@example.com" value="1" readonly>
                <input type="email" class="form-control" id="signtype" name="signtype"  value="Me Only" readonly hidden>
            </div>

            <div class="mb-3">
                <label for="uploader" class="form-label">Uploader</label>
                <input type="text" class="form-control" id="uploader" name="uploader" placeholder="name@example.com" value="Fetched From Database" readonly>
                <input type="text" class="form-control" id="status" name="status" placeholder="name@example.com" value="Completed" readonly hidden>
            </div>

            <div class="mb-3">
                <label for="expiredate" class="form-label">Expire Date</label>
                <input type="date" class="form-control" id="expiredate" name="expiredate" placeholder="name@example.com" required>
            </div>



            <div class="mb-3">
                <label for="file" class="form-label">Input File</label>
                <input class="form-control" type="file" id="file" name="file" required>
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
