<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    return view('home');
});

Route::get('/intro',function(){
    return view('intro');
});

Route::redirect('/zzz','/intro',301);



Route::get('/user/{name?}/{id?}',function($name = null , $id = null){
   $data = compact('name','id');
    return view('user')->with($data);
});