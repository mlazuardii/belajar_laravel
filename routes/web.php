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

//pelajaran ke-20 
Route::get('/murid', 'MuridController@index');

//pelajaran ke-21 
Route::get('/staf', 'StafController@index');
Route::get('/staf/tambah', 'StafController@tambah');
Route::post('/staf/store', 'StafController@store');
Route::get('/staf/edit/{id}', 'StafController@edit');
Route::put('/staf/update/{id}', 'StafController@update');
Route::get('/staf/hapus/{id}', 'StafController@delete');

//pelajaran ke-22 
Route::get('/staf/trash', 'StafController@trash');
Route::get('/staf/kembalikan/{id}', 'StafController@kembalikan');
Route::get('/staf/kembalikan_semua', 'StafController@kembalikan_semua');
Route::get('/staf/hapus_permanen/{id}', 'StafController@hapus_permanen');
Route::get('/staf/hapus_permanen_semua', 'StafController@hapus_permanen_semua');

//pelajaran ke-23 
Route::get('/pengguna', 'PenggunaController@index');

//pelajaran ke-24 
Route::get('/article', 'WebController@index');

//plajaran ke-25 
Route::get('/anggota', 'DikiController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//pelajaran ke-28  
Route::get('/rahasia', 'RahasiaController@enkripsi');
Route::get('/data/', 'RahasiaController@data');
Route::get('/data/{data_rahasia}', 'RahasiaController@data_proses');
Route::get('/rahasia2', 'RahasiaController@hash');