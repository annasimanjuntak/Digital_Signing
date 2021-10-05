<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Carbon;
use App\Models\Account;
class Registration extends Controller
{
    public function create(Request $request)
    {   
      // $validated = $request->validate([
      //       'nik' =>'required|integer|digits:16|unique:accounts',
      //       'ktp_photo'=> 'required|mimes:jpg,jpeg,png;',
      //       'date_of_birth'=>'required|string|max:255',
      //       'place_of_birth'=>'required|date_format:Y-M-D|before:today',
      //       'gender' =>'required|in:Male,Female',
      //       'npwp_photo'=> 'mimes:jpg,jpeg,png',
      //       'name' => 'required|string|max:255',
      //       'email' => 'required|string|email|max:255|unique:users',
      //       'password' => 'required|string|min:8|confirmed',
      //       'captcha' => 'required|captcha',

    // ]);
        // $ktp_photo = $request->file('ktp_photo');
        // $npwp_photo = $request->file('npwp_photo');
        // $name_gen = hexdec(uniqid());
        // $img_ext_ktp = strtolower($ktp_photo->getClientOriginalExtension());
        // $img_ext_npwp = strtolower($npwp_photo->getClientOriginalExtension());
        // $img_name_ktp = $name_gen.'.'.$img_ext_ktp;
        // $img_name_npwp = $name_gen.'.'.$img_npwp;
        // $up_location_ktp = 'image/ktp/';
        // $up_location_npwp = 'image/npwp/';
        // $ktp_img = $up_location_ktp.$img_name;
        // $npwp_img = $up_location_npwp.$img_name;
        // $ktp_photo->move($up_location_ktp,$img_name);
        // $npwp_photo->move($up_location_npwp,$img_name);
        Account::insert([
          'nik'=>$request->nik,
          // 'ktp_photo'=>$ktp_img,
          'name'=>$request->name,
          'date_of_birth'=>$request->date_of_birth,
          'place_of_birth'=>$request->place_of_birth,
          'gender'=>$request->gender,
          'address'=>$request->address,
          'city'=>$request->city,
          'province'=>$request->province,
          'npwp'=>$request->npw,
          // 'npwp_photo'=>$npwp_img,
          'org_unit'=>$request->org_unit,
          'work_unit'=>$request->work_unit,
          'position'=>$request->position,
          'created_at' => Carbon::now()
        ]);
       User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request['password'])
          ]);
          return Redirect()->route('login');
        
    }
}
