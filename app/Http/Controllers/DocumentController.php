<?php

namespace App\Http\Controllers;

use App\Models\DocumentModel;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    function FetchDocumentStats(){
        $document=DocumentModel::All();

        return view('welcome',compact('document'));
    }
}
