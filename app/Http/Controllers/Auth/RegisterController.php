<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Account;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'captcha' => ['required','captcha'],
            // 'nik' =>['required','integer','digits:16','unique:accounts'],
            // 'ktp_photo'=> ['required','mimes:jpg,jpeg,png;'],
            // 'date_of_birth'=>['required','string','max:255'],
            // 'place_of_birth'=>['required','date_format:Y-M-D','before:today'],
            // 'gender' =>['required','in:Male,Female'],
            // 'address'=>['required','string','max:1024'],
            // 'city'=>['required','string','max:255'],
            // 'province'=>['required','string','max:255'],
            // 'npwp_photo'=> ['mimes:jpg,jpeg,png'],
            // 'org_unit'=>['required','string','max:255'],
            // 'work_unit'=>['required','string','max:255'],
            // 'position'=>['required','string','max:255'],
        ]);
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    public function create(array $data)
    {   
    
        $ktp_photo = $data->file('ktp_photo');
        $npwp_photo = $data->file('npwp_photo');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($ktp_photo->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location_ktp = 'image/ktp/';
        $up_location_npwp = 'image/npwp/';
        $ktp_img = $up_location_ktp.$img_name;
        $npwp_img = $up_location_npwp.$img_name;
        $ktp_photo->move($up_location_ktp,$img_name);
        $npwp_photo->move($up_location_npwp,$img_name);
     
    
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
          ]);
        Account::create([
          'nik'=>$data['nik'],
          'ktp_photo'=>$ktp_img,
          'name'=>$data['name'],
          'date_of_birth'=>$data['date_of_birth'],
          'place_of_birth'=>$data['place_of_birth'],
          'gender'=>$data['gender'],
          'address'=>$data['address'],
          'city'=>$data['city'],
          'province'=>$data['province'],
          'npwp'=>$data['npw'],
          'npwp_photo'=>$npwp_img,
          'org_unit'=>$data['org_unit'],
          'work_unit'=>$data['work_unit'],
          'position'=>$data['position'],
        ]); 
     
    }


}
