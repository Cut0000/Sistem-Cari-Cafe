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

// HALAMAN TANPA LOGIN
Route::get('/', 'KafeController@index');
Route::get('/kafe/cari','KafeController@cari');
Route::get('/post/{id}','PostController@post');

// ADMIN WEBSITE (dengan enkripsi)
Route::get('/index/eyJpdiI6IkJsSEdsKzVrNG1Qb05nZU9LZ1FRSXc9PSIsInZhbHVlIjoiXC9mQVpWZkJmVGhMMnlaN0NPZmFEM2c9PSIsIm1hYyI6ImI5OWE0OTZiODI0M2QwMDJiYWFiOTdiZTRlZGEyMWM5MzhmNWNhNjY2OThiMzZjZGU1ODA2ZDllODc2YjEzMWYifQ==', 'CafeController@index');
Route::get('/edit/{id}', 'CafeController@edit');
Route::get('/delete/{id}', 'CafeController@hapus');
Route::post('/update', 'CafeController@update');
Route::post('/store', 'CafeController@store');
Route::get('/tambah', 'CafeController@tambah');
Auth::routes(); 

// PENGELOLA KAFE
Route::get('/profil', 'ProfilController@index')->name('home');
Route::get('/editgambar', 'ProfilController@edit');
Route::get('/indexreservasi', 'SewaKafecontroller@index');
Route::get('/indexbarista', 'SewaBaristaController@index');





/* RESERVASI KAFE */
Route::get('/sewakafe', 'SewaKafeController@index')->name('home');
Route::get('/sewakafe/tambah','SewaKafeController@tambah');
// Route::get('/sewakafe/tambah','SewaKafeController@tambah');
Route::get('/sewakafe/delete/{id}', 'SewaKafeController@hapus');
Route::post('/sewakafe/index', 'SewaKafeController@store'); 

/* SEWA BARISTA */
Route::get('/sewabarista', 'SewaBaristaController@index')->name('home');
Route::post('/sewabarista', 'SewaBaristaController@store');
Route::get('/sewabarista/delete/{id}', 'SewaBaristaController@hapus');
Route::get('/sewabarista/tambah','SewaBaristaController@tambah');
Route::post('/sewabarista/index', 'SewaBaristaController@store');





// Route::get('/kelola','SewaKafeController@tambah')->name('home');
//sewakafe
// Route::get('/sewakafe/index', 'SewaKafeController@index')->name('home');


//sewabarista
// Route::get('/sewabarista/index', 'SewaBaristaController@index');


//NOTIF
Route::get('/pesan','NotifController@index');
Route::get('/pesan/sukses','NotifController@sukses');
Route::get('/pesan/peringatan','NotifController@peringatan');
Route::get('/pesan/gagal','NotifController@gagal');

// COBA !!

Route::get('/swkafe', 'SewaKafeController@tambah');


// Route::get('/SewaBa', 'SewaKafeController@index')->name('home');
Route::get('/sewakafe/tambah','SewaKafeController@tambah');

// Route::get('/sewakafe/tambah','SewaKafeController@tambah');


// })->name('adminpage');
// Route::get('admin-login','Auth\AdminLoginController@showLoginForm');
// Route::post('admin-login', ['as' => 'admin-login', 'uses' => 'Auth\AdminLoginController@login']);
// Route::get('admin-register','Auth\AdminLoginController@showRegisterPage');
// Route::post('admin-register', 'Auth\AdminLoginController@register')->name('admin.register');

// Route::get('/data/', 'DikiController@data');
// Route::get('/data/{data_rahasia}', 'DikiController@data_proses');
// Route::get('/enkripsi', 'DikiController@enkripsi');
// Route::get('/hash', 'DikiController@hash');

// Route::post('/index', 'CafeController@store');
//Route::get('/booking/delete/{id}',SewaController@hapus);



// Auth::routes();
// Route::get('/index/{data_rahasia}', 'DikiController@data_proses');



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/{id}', function () {
//     return view('welcome');
// });

// Route::get('/{id}','KafeController@index');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/kafe', function () {
//     return view('kafe');
// });

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/admin', function(){
//     return view('admin');
