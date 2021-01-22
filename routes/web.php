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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@index');

Route::get('/about', 'AboutController@index');

Route::get('/siswa', 'SiswaController@index');
Route::post('/siswa/create', 'SiswaController@create');
Route::get('/siswa/{id}/edit', 'SiswaController@edit');
Route::post('/siswa/{id}/update', 'SiswaController@update');
Route::get('/siswa/{id}/delete', 'SiswaController@delete');
Route::get('/siswa/cari', 'SiswaController@cari');

Route::get('/pustakawan', 'PustakawanController@index');
Route::post('/pustakawan/create', 'PustakawanController@create');
Route::get('/pustakawan/{id}/edit', 'PustakawanController@edit');
Route::post('/pustakawan/{id}/update', 'PustakawanController@update');
Route::get('/pustakawan/{id}/delete', 'PustakawanController@delete');

Route::get('/buku', 'BukuController@index');
Route::post('/buku/create', 'BukuController@create');
Route::get('/buku/{id}/edit', 'BukuController@edit');
Route::post('/buku/{id}/update', 'BukuController@update');
Route::get('/buku/{id}/delete', 'BukuController@delete');

Route::get('/peminjaman', 'PeminjamanController@index');
Route::post('/peminjaman/create', 'PeminjamanController@create');
Route::get('/peminjaman/{id}/edit', 'PeminjamanController@edit');
Route::post('/peminjaman/{id}/update', 'PeminjamanController@update');
Route::get('/peminjaman/{id}/delete', 'PeminjamanController@delete');

Route::get('/pengembalian', 'PengembalianController@index');
Route::post('/pengembalian/create', 'PengembalianController@create');
Route::get('/pengembalian/{id}/edit', 'PengembalianController@edit');
Route::post('/pengembalian/{id}/update', 'PengembalianController@update');
Route::get('/pengembalian/{id}/delete', 'PengembalianController@delete');

Route::get('/rak', 'RakController@index');
Route::post('/rak/create', 'RakController@create');
Route::get('/rak/{id}/edit', 'RakController@edit');
Route::post('/rak/{id}/update', 'RakController@update');
Route::get('/rak/{id}/delete', 'RakController@delete');
