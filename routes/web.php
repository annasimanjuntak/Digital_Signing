<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\LoginController;
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
})->middleware('auth');

Route::get('/pos', function () {
    return view('beranda',[
        "title"=>'Beranda',
        "active"=>"status",
        "data"=>Document::latest()->get(),
        "username" => "Ryan Tanoto"
    ]);
})->middleware('auth');


Route::get('docs/{document:id}',[DocumentController::class,'show']);

Route::get('/alldocs',[DocumentController::class, 'index'])->middleware('auth');
Route::get('/form/meonly',[DocumentController::class, 'showFormMeOnly']);
Route::get('/form',[DocumentController::class, 'showForm'])->middleware('auth');
Route::get('/participation',[DocumentController::class, 'participate'])->middleware('auth');
Route::post('/store', [DocumentController::class,'store'])->name('store');

Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login',[LoginController::class, 'authenticate']);

Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/register',function(){
    return view('register.register');
})->middleware('guest');
