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

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['auth','role:admin']],function(){
    Route::get('/', 'BeritaController@index')->name('index');
    Route::resource('berita','BeritaController');
    Route::resource('galeri','GaleriController');
    Route::resource('lokasi','LokasiController');
    Route::resource('merk','MerkController');
    Route::resource('mobil','MobilController');
    Route::resource('tipe','TipeController');
});