@extends('layouts.main')

@section('container')
<div class="card-group">

    <div class="card">

      <div class="card-body">
        <h5 class="card-title text-center">Me Only</h5>
        <div class="text-center py-2"><a href="/form/meonly" class="text-decoration-none text-dark"><i class="fas fa-user fa-5x" ></i></a></div>
      </div>
     </a>
    </div>

    <div class="card">

        <div class="card-body">
            <h5 class="card-title text-center">Me and Others</h5>
            <div class="text-center py-2"><a href="" class="text-decoration-none text-dark"><i class="fas fa-user-friends fa-5x"></i></a></div>
        </div>
      </a>
    </div>

    <div class="card">

        <div class="card-body">
        <h5 class="card-title text-center">Others Only</h5>
        <div class="text-center py-2"><a href="" class="text-decoration-none text-dark"><i class="fas fa-users fa-5x"></i></a></div>
      </div>
    </a>
    </div>
</div>
@endsection
