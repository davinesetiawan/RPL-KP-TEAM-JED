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

Route::get('/redirect', 'loginGoogleController@redirect');
Route::get('/callback', 'loginGoogleController@callback');
Route::get('/logout', 'loginGoogleController@logout');

Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/mahasiswa/edit', 'MahasiswaController@edit');
Route::get('/dosen', 'DosenController@index');

Route::get('/suratkp', 'SuratKPController@index');
Route::get('/suratkp/tambahSurat', 'SuratKPController@tambahSurat');
Route::post('/suratkp/simpan', 'SuratKPController@simpan');
Route::post('/suratkp/edit/{id_skp}', 'SuratKPController@edit');
Route::put('/suratkp/updated/{id_skp}', 'SuratKPController@updated');
Route::put('/suratkp/delete/{id_skp}', 'SuratKPController@delete');

Route::get('/prakp', 'praKPController@index');
Route::get('/prakp/tambah', 'praKPController@tambah');
Route::post('/prakp/simpan', 'praKPController@simpan');
Route::post('/prakp/edit/{id_pkp}', 'praKPController@edit');
Route::put('/prakp/updated/{id_pkp}', 'praKPController@updated');
Route::put('/prakp/delete/{id_pkp}', 'praKPController@delete');

Route::get('/kp', 'KPController@index');
Route::get('/kp/tambah', 'KPController@tambah');
Route::post('/kp/simpan', 'KPController@simpan');
Route::post('/kp/edit/{id_kp}', 'KPController@edit');
Route::put('/kp/updated/{id_kp}', 'KPController@updated');
Route::put('/kp/delete/{id_kp}', 'KPController@delete');
