<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registration;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\AccountController;
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
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/document', [DocumentController::class, 'index'])->name('show.document');
Route::get('/document/upload', [DocumentController::class, 'upload'])->name('upload.document');
Route::post('/document/store', [DocumentController::class, 'store'])->name('store');
Route::get('/document/view/{id}', [DocumentController::class, 'view']); 


Route::get('/account/create', [AccountController::class, 'create'])->name('account.create');
Route::post('/account', [AccountController::class, 'store'])->name('account.store');
Route::get('/account', [AccountController::class, 'index'])->name('account');
