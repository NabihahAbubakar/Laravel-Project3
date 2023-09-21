<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formcontroller;

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

Route::get('/home', function () {
    return view('home');
});


Route::get('/form',[formcontroller::class,'index']);
Route::post('/form',[formcontroller::class,'form']);

Route::get('/contact/{email?}', function ($email=null) {
    $data= compact('email');
    return view('contact')->with($data);
});