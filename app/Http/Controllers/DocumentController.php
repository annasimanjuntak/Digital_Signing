<?php

namespace App\Http\Controllers;

use App\Models\DocumentModel;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    function AllDoc(){
        $documents = DB::table('documents')
        ->join('users','documents.user_id','user_id')
        ->select('documents.*','users.name')
        ->latest()->paginate(5);

        return view('home',compact('documents '));
    }
}
