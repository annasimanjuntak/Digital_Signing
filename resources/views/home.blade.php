@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <a href="{{url('/account/create')}}"> <button>Profile</button></a>
                <div class="card-body">
                  
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                  
                </div>
            </div>
            <a href="{{route('show.document')}}">Show Document</a>
        <div class="card-group">
        <div class="card">
        <div class="card-body ">
          <h5 class="card-title text-center">Action Required</h5>
          <?php $a=0; ?>
          @foreach ($documents as $docs)
              @if ($docs->status=="Action Required")
                  <?php $a+=1; ?>
              @endif
           @endforeach
           <h1 class="card-text text-center"><small class="text-muted"> {{ $a }}</small></h1>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">Waiting for Others</h5>
          <?php $b=0; ?>
          @foreach ($documents as $docs)
              @if ($docs->status=="Waiting for Others")
              <?php $b+=1; ?>
              @endif
           @endforeach
           <h1 class="card-text text-center"><small class="text-muted">{{ $b }}</small></h1>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">Expiring Soon</h5>
          <?php $c=0; ?>
          @foreach ($documents as $docs)
              @if ($docs->status=="Expiring Soon")
              <?php $c+=1; ?>
              @endif
           @endforeach
           <h1 class="card-text text-center"><small class="text-muted">{{ $c }}</small></h1>
        </div>
      </div>
      <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center">Completed</h5>
            <?php $d=0; ?>
            @foreach ($documents as $docs)
              @if ($docs->status=="Completed")
              <?php $d+=1; ?>

              @endif
           @endforeach
           <h1 class="card-text text-center"><small class="text-muted">{{ $d }}</small></h1>
          </div>
        </div>
    </div>
 </div>
        </div>
    </div>
</div>
@endsection
