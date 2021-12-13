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

//tambahkan disini untuk link route tugas 4 (Cara 2)

Route::get('tugas4', function () {
    //yang disini tidak banyak proses/tidak banyak persiapan meload form
    return view('htmltugas4');
});

Route::get('praktikum2', function () {
    //yang disini tidak banyak proses/tidak banyak persiapan meload form
    return view('htmlpraktikum2');
});

//jika ternyata kasusnya butuh ngeload banyak proses

Route::get('ets',"ViewController@form");

Route::get('tugasphp',"ViewController@formPhp");
Route::get('hasilphp',"ViewController@hasilPhp");

// Route::get('isiannama',"ViewController@showForm") ;
// Route::post('greetings',"ViewController@resultGreetings");


//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');

//tugas 3 & 4
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');


//Tugas Pertemuan 13 - 25 November 2021
//route CRUD
Route::get('/tugas','TugasController@index');
Route::get('/tugas/tambah','TugasController@tambah');
Route::post('/tugas/store','TugasController@store');
Route::get('/tugas/edit/{id}','TugasController@edit');
Route::post('/tugas/update','TugasController@update');
Route::get('/tugas/hapus/{id}','TugasController@hapus');

//route CRUD absen
Route::get('/absen','AbsenController@indexabsen');
Route::get('/absen/add','AbsenController@add');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');


//Tugas Pertemuan 14
Route::get('pegawai','PegawaiController@index');
Route::get('tugas','TugasController@index');
Route::get('absen','AbsenController@indexabsen');

//Kuliah Pertemuan 15
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/view/{id}','PegawaiController@detail');

//Praktikum Pertemuan 15
Route::get('/kaos','KaosController@index');
Route::get('/kaos/tambah','KaosController@tambah');
Route::post('/kaos/store','KaosController@store');
Route::get('/kaos/edit/{id}','KaosController@edit');
Route::post('/kaos/update','KaosController@update');
Route::get('/kaos/hapus/{id}','KaosController@hapus');
Route::get('kaos','KaosController@index');
Route::get('/kaos/detail/{id}','KaosController@detail');
Route::get('/kaos/cari','KaosController@cari');

