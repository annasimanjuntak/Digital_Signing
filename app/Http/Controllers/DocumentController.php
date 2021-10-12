<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Validator;

class DocumentController extends Controller
{
    public function index(){
        return view('dash_test',[
            "title"=>'All Document',
            "active"=>"alldocs",
            "data"=>Document::latest()->get()
        ]);
    }


    public function participate(){
        return view('participation',[
            "title"=>'Participation Type',
            "active"=>"participation",
            "data"=>Document::latest()->get()
        ]);
    }

    public function showFormMeOnly(){
        return view('file-upload',[
            "title" =>"Form",
            "active"=>"form",
            "type"=>"Me Only"
        ]);
    }
    public function showForm(){
        return view('file-upload',[
            "title" =>"Form",
            "active"=>"form"
        ]);
    }


    public function show(Document $document){
        return view('single_doc',[
            'title'=>"View Status",
            'doc'=>$document,
            'active'=>'status'
        ]);
    }

    public function store(Request $request)
    {

        $validatedData=$request->validate([
         'file' => 'required|mimes:pdf|max:10048',
         'userid'=>'required',
         'uploader'=>'required',
         'expiredate'=>'required'
        ]);

        $save = new Document;
        $userid=$request->userid;
        $signtype=$request->signtype;
        $uploader = $request->uploader;
        $status=$request->status;
        $expired=$request->expiredate;
        $name = $request->file('file')->getClientOriginalName();
        $path=$request->file('file')->store('files');

        if($request->file()){
            $save->user_id = $userid;
            $save->file_name = $name;
            $save->path = $path;
            $save->uploader = $uploader;
            $save->status = $status;
            $save->expired = $expired;
            $save->signing_participation_type = $signtype;
            $save->save();
            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $name);
        }

        // return redirect('form')->with('status', 'File Has been uploaded successfully in laravel 8');

    }
}
