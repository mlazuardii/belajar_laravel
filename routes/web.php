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

Route::get('halo', function () {
    return "Halo, Selamat belajar laravel ya!";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('dosen', 'DosenController@index');

Route::get('/pegawai/{nama}', 'PegawaiController@index');

Route::get('/formulir', 'PegawaiController@formulir');
Route::post('/formulir/proses', 'PegawaiController@proses');

//Pelajaran Ke-8
Route::get('blog', 'BlogController@home');
Route::get('blog/tentang', 'BlogController@tentang');
Route::get('blog/kontak', 'BlogController@kontak');

//Pelajaran ke-9
Route::get('pegawaicrud','PegawaiCrudController@index');

//Pelajaran ke-10
Route::get('pegawaicrud/tambah','PegawaiCrudController@tambah');
Route::post('pegawaicrud/store','PegawaiCrudController@store');

//pelajaran ke-11
Route::get('/pegawaicrud/edit/{id}','PegawaiCrudController@edit');
Route::post('/pegawaicrud/update','PegawaiCrudController@update');

//pelajaran ke-12
Route::get('/pegawaicrud/hapus/{id}','PegawaiCrudController@hapus');

//pelajaran ke-16
Route::get('pegawaicrud/cari','PegawaiCrudController@cari');

//pelajaran ke-18
Route::get('/input', 'MalasngodingController@input');

Route::post('/proses', 'MalasngodingController@proses');
