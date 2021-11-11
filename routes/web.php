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
