<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Models\Account;
use Illuminate\Support\Carbon;
use  Auth;
use DB;
class AccountController extends Controller
{   
    public function __construct(){
        $this ->middleware('auth');

    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $profile = DB::table('accounts')->where('user_id',Auth::user()->id)->first();

        return view('account.index',compact('profile')); 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatetdData=$request->validate([
            'phone'=>'required',
            'ktp'=>'required',
            'ktp_photo'=>'required',
            'npwp'=>'required',
            'npwp_photo'=>'required',
            'address'=>'required',
            'city'=>'required',
            'province'=>'required',
            'gender'=>'required',
            'date_of_birth'=>'required',
            'place_of_birth'=>'required',
            'org_unit'=>'required',
            'work_unit'=>'required',
            'position'=>'required',
            
             
        ]);
        $ktp_photo = $request->file('ktp_photo');
        $name_gen_ktp = hexdec(uniqid()).'.'.$ktp_photo->getClientOriginalExtension();
        Image::make($ktp_photo)->resize(300,200)->save('image/ktp/'.$name_gen_ktp);
        $last_img_ktp = 'image/ktp/'.$name_gen_ktp;

         //store npwp
         $npwp_photo = $request->file('npwp_photo');
        $name_gen_npwp = hexdec(uniqid()).'.'.$npwp_photo->getClientOriginalExtension();
         Image::make($npwp_photo)->resize(300,200)->save('image/npwp/'.$name_gen_npwp);
         $last_img_npwp = 'image/npwp/'.$name_gen_npwp;

        //  // //store signature
        //  $spesimen_file = $request->file('spesimen_file');
        //  $name_gen_signature = hexdec(uniqid()).'.'.$spesimen_file->getClientOriginalExtension();
        //  Image::make($spesimen_file)->resize(300,200)->save('image/signature/'.$name_gen_signature);
        //  $last_img_signature = 'image/signature/'.$name_gen_signature;

        Account::insert([
            'user_id'=>Auth::user()->id,
            'phone'=>$request->phone,
            'ktp'=>$request->ktp,
            'ktp_photo'=>$last_img_ktp,
            'npwp'=>$request->npwp,
            'npwp_photo'=>$last_img_npwp,
            'address'=>$request->address,
            'city'=>$request->city,
            'province'=>$request->province,
            'gender'=>$request->gender,
            'date_of_birth'=>$request->date_of_birth,
            'place_of_birth'=>$request->place_of_birth,
            'org_unit'=>$request->org_unit,
            'work_unit'=>$request->work_unit,
            'position'=>$request->position,
          //'spesimen_file'=>$last_img_signature, 
            'created_at' => Carbon::now()
        ]);
        return Redirect()->back()->with('success', 'Regiatration Succesful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('account.index',[
            'post'=>$post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
