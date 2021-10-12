<?php

use App\Http\Controllers\DocumentController;
use App\Models\Document;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title"=>'Home',
        "active"=>"home",
        "data"=>Document::latest()->get()
    ]);
});

Route::get('/pos', function () {
    return view('beranda',[
        "title"=>'Beranda',
        "active"=>"status",
        "data"=>Document::latest()->get(),
        "username" => "Ryan Tanoto"
    ]);
});

Route::get('docs/{document:id}',[DocumentController::class,'show']);

Route::get('/alldocs',[DocumentController::class, 'index']);
Route::get('/form/meonly',[DocumentController::class, 'showFormMeOnly']);
Route::get('/form',[DocumentController::class, 'showForm']);
Route::get('/participation',[DocumentController::class, 'participate']);
Route::post('/store', [DocumentController::class,'store'])->name('store');
