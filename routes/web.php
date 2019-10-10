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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/siswa', function() {
//     return "Selamat Datang....";
// });

// Route::get('/guru/{id}', function($id) {
//     return "Selamat Datang " .$id;
// });

// Route::get('/karyawan/{parameter?}', function($parameter=null) {
//     return "Selamat Datang karyawan " .$parameter;
// });

// Route::get('/home', function() {
//     return view('home');
// });

// Route::get('/admin', function() {
//     return redirect('/home');
// });

Route::get('/pegawai', 'PegawaiController@index');
Route::get('/karyawan', 'KaryawanController@about');
Route::get('/pelayan', 'PelayanController@index');