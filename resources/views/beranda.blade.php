@extends('layouts.pos')
@section('title', $title)
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 css1" id="css1">
                <div class="card" style="min-height: 120px; background: linear-gradient(to right, #CFDEFF 0%, #CFDEFF 100%, red 80%, red 100%);">

                    <div class="col-md-3 ">
                        <div style="max-height: 120px; background-color: #CFDEFF; border-radius: 18px 0px 0px 18px;">
                            <div class="card-content">
                                <p class="category" id="sig">My Signature <a href="#" style="font-size: 12px;"> &nbsp; Edit</a> </p>
                                <h3 class="card-title rock" id="rock">Ryan Tanoto</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div style="min-height: 120px; background-image: url('../assets/img/bg2.png'); border-radius: 0px 18px 18px 0px; padding-bottom: 10px; height: 120px;">
                            <div class="col-md-3 notifikasi">
                                <div style="max-height: 60px; ">
                                    <div class="card-content">
                                        <?php $a=0; ?>
                                        @foreach ($data as $docs)
                                            @if ($docs->status=="Action Required")
                                                <?php $a+=1; ?>
                                            @endif
                                        @endforeach
                                        <h3 class="card-title">{{ $a }}</h3>
                                        <p class="category">Sign Now </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 notifikasi">
                                <div style="max-height: 60px; ">
                                    <div class="card-content">
                                        <?php $b=0; ?>
                                        @foreach ($data as $docs)
                                            @if ($docs->status=="Waiting for Others")
                                            <?php $b+=1; ?>
                                            @endif
                                        @endforeach
                                        <h3 class="card-title">{{ $b }}</h3>
                                        <p class="category">Waiting</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 notifikasi">
                                <div style="max-height: 60px; ">
                                    <div class="card-content">
                                        <?php $c=0; ?>
                                        @foreach ($data as $docs)
                                            @if ($docs->status=="Expiring Soon")
                                            <?php $c+=1; ?>
                                            @endif
                                        @endforeach
                                        <h3 class="card-title">{{ $c }}</h3>
                                        <p class="category">Expiring</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 notifikasi1">
                                <div style="max-height: 60px;  ">
                                    <div class="card-content">
                                        <?php $d=0; ?>
                                        @foreach ($data as $docs)
                                            @if ($docs->status=="Completed")
                                            <?php $d+=1; ?>
                                            @endif
                                        @endforeach
                                        <h3 class="card-title">{{ $d }}</h3>
                                        <p class="category">Draft</p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 upload1">
                <div class="card " style="max-height: 200px; box-shadow: 15px;">
                    <div class="col-md-12 upload2" id="upload2" style="box-shadow: 15px;">
                        <div class="col-md-3">
                            <div class="upload2" style="min-height: 160px; background-color: #FFFFFF; border-radius: 18px 0px 0px 18px;">
                                <div class="card-content">
                                    <p class="category" style="color: tomato;"><strong>Revenue</strong></p>
                                    <h3 class="card-title" style="color: tomato;"></h3>$23,100</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
