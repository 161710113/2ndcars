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
Route::get('/', 'FrontendController@index')->name('home');
Route::get('mobil', 'FrontendController@mobil')->name('mobil');
Route::get('detail/{id}', 'FrontendController@detailmobil')->name('detail');
Route::get('news/{id}', 'FrontendController@detailberita')->name('news');
Route::get('news', 'FrontendController@news')->name('news');



Auth::routes();


Route::group(['prefix'=>'admin', 'middleware'=>['auth','role:admin']],function(){
    Route::get('/', 'HomeController@index');
    Route::resource('berita','BeritaController');
    Route::resource('galeri','GaleriController');
    Route::resource('lokasi','LokasiController');
    Route::resource('mob','MobilController');
    Route::resource('merk','MerkController');
    Route::resource('tipe','TipeController');
    
});

Route::group(['prefix'=>'home', 'middleware'=>['auth','role:member']],function(){
    Route::resource('/', 'FrontendController');
    Route::resource('sell', 'IklanController');
    Route::get('fotomobil/{id}', 'FotoiklanController@create')->name('fotomobil');
    Route::post('fotomobil/{id}/create', 'FotoiklanController@store')->name('fotomobil.store');
    Route::resource('iklan', 'IklankuController');
    // Route::get('iklan', 'IklankuController@index')->name('iklan');
    // Route::get('iklan/{id}', 'IklankuController@edit')->name('iklan.edit');
    Route::post('iklan/{id}/edit', 'IklankuController@update')->name('iklan.update');
    // Route::post('iklan/{id}/delete', 'IklankuController@destroy')->name('iklan.delete');
    
    
    
});