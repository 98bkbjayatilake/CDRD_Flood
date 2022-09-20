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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',function(){
    return view('login');
});



Route::get('/update_gn',function(){
    return view('update_gn');
});

Route::get('/navbartest',function(){
    return view('navbartest');
});

Route::get('/poc_home',function(){
    return view('.pages.poc_home');
});

Route::get('/GN_update_details',function(){
    return view('.pages.GN_update_details');
});
Route::post('/update_gn','App\Http\Controllers\grama_niladariController@get_data');

Route::get('.pages.GN_update_details','App\Http\Controllers\grama_niladariController@update_gn_button');
