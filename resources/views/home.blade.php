@extends('layouts.main ')

@section('container')
 <div class="card-group">
    <div class="card">
        <div class="card-body ">
          <h5 class="card-title text-center">Action Required</h5>
          <?php $a=0; ?>
          @foreach ($data as $docs)
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
          @foreach ($data as $docs)
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
          @foreach ($data as $docs)
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
            @foreach ($data as $docs)
              @if ($docs->status=="Completed")
              <?php $d+=1; ?>

              @endif
           @endforeach
           <h1 class="card-text text-center"><small class="text-muted">{{ $d }}</small></h1>
          </div>
        </div>
    </div>
 </div>
@endsection
