<?php

namespace App\Http\Controllers;

use App\Models\Signature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SignController extends Controller
{


    public function view(){
        return view('signature',[
            'data'=>Signature::all()
        ]);
    }


    public function store(Request $request){

        // dd($request->type_name);

        $signature= new Signature;
        $base64_image  = $request->generatedbase64;

        // //Try To get first letter of each word
        // //The strtoupper() function converts a string to uppercase.
        // $name  = strtoupper($request->type_name);
        // //prefixes that needs to be removed from the name
        // $remove = ['.', 'MRS', 'MISS', 'MS', 'MASTER', 'DR', 'MR', 'Dr'];
        // $nameWithoutPrefix=str_replace($remove," ",$name);

        // $words = explode(" ", $nameWithoutPrefix);

        // //this will give you the first word of the $words array , which is the first name
        // $firtsName = reset($words);

        // //this will give you the last word of the $words array , which is the last name
        // $lastName  = end($words);

        // echo substr($firtsName,0,1); // this will echo the first letter of your first name
        // echo substr($lastName ,0,1); // this will echo the first letter of your last name


        // Convert from base64 to string
        $imageName = $request->type_name.'.'.'png';
        $base64_image = str_replace('data:image/png;base64,', '', $base64_image);
        $base64_image = str_replace(' ', '+', $base64_image);
        Storage::disk('public')->put('image/' . $imageName, base64_decode($base64_image));




        // $name=$request->type_name;

        // if (preg_match('/^data:image\/(\w+);base64,/', $base64_image)) {
        //     $data = substr($base64_image, strpos($base64_image, ',') + 1);

        //     $data = base64_decode($data);
        //     Storage::disk('public')->put("image/".$name.".png", $data);
        // }
        $signature->base64=$imageName;
        $signature->save();
        return back();
    }
}
