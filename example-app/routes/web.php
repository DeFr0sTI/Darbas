<?php

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

Route::get('main', function(){
    return view('main');
}); 

Route::get('delete', function(){
    return view('delete');
}); 

Route::get('airlines', function(){
    return view('airlines');
}); 

Route::get('airports', function(){
    return view('airports');
}); 

Route::get('countries', function(){
    return view('countries');
}); 