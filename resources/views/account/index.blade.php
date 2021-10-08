@extends('layouts.app')
@section('content')
<div class="container">
        <label for="phone">Name</label> 
        <input type="email" class="form-control" id="email" placeholder="" value="{{Auth::user()->name}}" readonly>

        <label for="phone">Phone</label> 
        <input type="email" class="form-control" id="email" placeholder="" value="{{$profile->phone}}" readonly>

        <label for="phone">KTP</label> 
        <input type="email" class="form-control" id="email" placeholder="" value="{{$profile->ktp}}" readonly>
        
        <label for="phone">Photo KTP</label> <br>
        <img src="{{asset($profile->ktp_photo)}}" style="height:40px; width:70px;"><br>

        <label for="phone">NPWP</label> <br>
        <input type="email" class="form-control" id="email" placeholder="" value="{{$profile->npwp}}" readonly>

        <label for="phone">NPWP_Photo</label><br> 
        <img src="{{asset($profile->npwp_photo)}}" style="height:40px; width:70px;">  <br>  

        <label for="phone">Adress</label> 
        <input type="email" class="form-control" id="email" placeholder="" value="{{$profile->address}}" readonly>

        <label for="phone">City</label> 
        <input type="email" class="form-control" id="email" placeholder="" value="{{$profile->city}}" readonly>

        <label for="phone">Province</label> 
        <input type="email" class="form-control" id="email" placeholder="" value="{{$profile->province}}" readonly>

        <label for="phone">Gender</label> 
        <input type="email" class="form-control" id="email" placeholder="" value="{{$profile->gender}}" readonly>

        <label for="phone">Date of Birth</label> 
        <input type="email" class="form-control" id="email" placeholder="" value="{{$profile->date_of_birth}}" readonly>

        <label for="phone">Place of Birth</label> 
        <input type="email" class="form-control" id="email" placeholder="" value="{{$profile->place_of_birth}}" readonly>

        <label for="phone">Organisation Unit</label> 
        <input type="email" class="form-control" id="email" placeholder="" value="{{$profile->org_unit}}" readonly>

        <label for="phone">Work Unit</label> 
        <input type="email" class="form-control" id="email" placeholder="" value="{{$profile->work_unit}}" readonly>

        <label for="phone">Position</label> 
        <input type="email" class="form-control" id="email" placeholder="" value="{{$profile->position}}" readonly>

      
</div>
@endsection