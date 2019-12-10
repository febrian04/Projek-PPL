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
    return view('landing');
});

Auth::routes();

Route::get('/landing', 'HomeController@index')->name('landing');

Route::get('/PanggilDokter', 'PanggilDokterController@index');

Route::post('/panggildokter', 'PanggildokterController@cariDokter')->name('panggil.dokter');

Route::get('/hasil-analisis/{id}', 'PanggildokterController@hasil')->name('hasil.analisis');

//artikel
Route::get('/artikel', 'artikelController@index');

//data diri
Route::get('/datadiri/index', 'PeternakController@datadiri');
Route::get('/datadiri/edit/{id}', 'PeternakController@edit');
Route::post('/datadiri/store', 'PeternakController@store');
Route::get('/datadiri/tambah', 'PeternakController@indextambah');
Route::get('/datadiri/destroy/{id}', 'PeternakController@destroy');
Route::post('/datadiri/update', 'PeternakController@update');

//upload
Route::get('/pembayaran', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
Route::get('/pembayaranberhasil', 'UploadController@proses_upload');

//data panggil
Route::get('/datapanggil', 'DataPanggilController@index');
Route::get('/datapanggil', 'DataPanggilController@datapanggil');
Route::get('/destroy/{id}', 'DataPanggilController@destroy');

//input hasil
Route::post('/update', 'DataPanggilController@update');
Route::get('/edit/{id}', 'DataPanggilController@edit');
Route::get('/hasil/{id}', 'DataPanggilController@hasil');
Route::get('/hasildata', 'DataPanggilController@hasildata');

Route::get('/hasildata/export_excel', 'HasilController@export_excel');

Route::get('/chart', 'ChartController@index');

