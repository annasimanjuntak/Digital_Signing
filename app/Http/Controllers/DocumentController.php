<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  Auth;
use Illuminate\Support\Carbon;

class DocumentController extends Controller
{
    public function __construct(){
        $this ->middleware('auth');

    }
    function index(){
        $documents = DB::table('documents')
        ->join('users','documents.user_id','user_id')
        ->select('documents.*','users.name')
        ->latest()->paginate(5);

        return view('document.index',compact('documents'));
    }
    function upload(){
        return view('document.upload');
    }
    public function store(Request $request)
    {

        $validated = $request->validate([
         'file' => 'required|mimes:pdf|max:10048',
      
        ]);
        $file = $request->file('file');
        $name_gen = hexdec(uniqid());
        $file_ext = strtolower($file->getClientOriginalExtension());
        $file_name = $name_gen.'.'.$file_ext;
        $up_location = 'files/';
        $path = $up_location.$file_name;
        $file->move($up_location,$file_name);
        
       Document::insert([
            'user_id'=> Auth::user()->id,
            'path'=>$path,
            'signing_participation_type'=>$request->signing_participation_type,
            'expired'=>$request->expired,
            'created_at'=>Carbon::now()
          
       ]);
        return Redirect()->route('show.document')->with('status', 'File Has been uploaded ');

    }
    public function view($id){
        $detail = Document::find($id);
        return view('document.detail', compact('detail'));
    }
}
