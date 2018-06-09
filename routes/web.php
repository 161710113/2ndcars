<?php

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

Auth::routes();


Route::group(['prefix'=>'admin', 'middleware'=>['auth','role:admin']],function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('berita','BeritaController');
    Route::resource('galeri','GaleriController');
    Route::resource('lokasi','LokasiController');
    Route::resource('mob','MobilController');
    Route::resource('merk','MerkController');
    Route::resource('tipe','TipeController');
    
});

Route::group(['prefix'=>'home', 'middleware'=>['auth','role:member|admin']],function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('galeri','GaleriController');
    Route::resource('mob','MobilController');
    
});