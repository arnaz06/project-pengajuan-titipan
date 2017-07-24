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




Route::group(['middleware' => ['web']], function(){
    Auth::routes();
    Route::get('/','HomeController@index');
    //Unit
    Route::get('/unit','UnitController@index');
    Route::get('/unit/create','UnitController@create');
    Route::post('/unit/create','UnitController@store');
    Route::get('/unit/{id}/edit','UnitController@edit');
    Route::post('/unit/{id}','UnitController@update');
    Route::get('/unit/{id}/detail','UnitController@show');
    Route::get('/unit/{id}/delete','UnitController@destroy');
    //Pengajuan
    Route::get('/pengajuan','PengajuanController@index');
    Route::get('/pengajuan/create','PengajuanController@create');
    Route::get('unit/{id}/pengajuan/create','PengajuanController@createWithId');
    Route::post('/pengajuan/create','PengajuanController@store');
    Route::get('/pengajuan/{id}/edit','PengajuanController@edit');
    Route::post('/pengajuan/{id}','PengajuanController@update');
    Route::get('/pengajuan/{id}/detail','PengajuanController@show');
    Route::get('/pengajuan/{id}/delete','PengajuanController@destroy');
    Route::get('/pengajuan/print/{id}',array('as'=>'pengajuan/print','uses'=>'PengajuanController@printpdf'));
    //Barang
    Route::get('/pengajuan/{id}/barang/create','BarangController@create');
    Route::post('/barang/create','BarangController@store');
    Route::get('/barang/{id}/edit','BarangController@edit');
    Route::post('/barang/{id}','BarangController@update');
    Route::get('/barang/{id}/delete','BarangController@destroy');
    //Pengadaan
    Route::get('/pengadaan/','PengadaanController@index');
    Route::get('/pengadaan/create','PengadaanController@create');
    Route::post('/pengadaan/create','PengadaanController@store');
    Route::get('/pengadaan/{id}/detail','PengadaanController@show');
    Route::get('/pengadaan/print/{id}',array('as'=>'pengadaan/print','uses'=>'PengadaanController@printpdf'));

});