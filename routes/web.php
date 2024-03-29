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

Route::get('/homemhs', 'HomeMhsController@index');
Route::get('/homedsn', 'HomeDsnController@index');

Route::get('/redirect', 'loginGoogleController@redirect');
Route::get('/callback', 'loginGoogleController@callback');
Route::get('/logout', 'loginGoogleController@logout');

Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/mahasiswa/edit/{id}', 'MahasiswaController@edit');
Route::put('/mahasiswa/updated/', 'MahasiswaController@updated');

Route::get('/dosen', 'DosenController@index');
Route::get('/dosen/edit/{id}', 'DosenController@edit');
Route::put('/dosen/updated/', 'DosenController@updated');


Route::get('/suratkp', 'SuratKPController@index');
Route::get('/suratkp/tambahSurat', 'SuratKPController@tambahSurat');
Route::post('/suratkp/simpan', 'SuratKPController@simpan');
Route::get('/suratkp/edit/{id_skp}', 'SuratKPController@edit');
Route::put('/suratkp/updated/', 'SuratKPController@updated');
Route::get('/suratkp/delete/{id_skp}', 'SuratKPController@delete');
Route::post('/lihatdok', 'lihatdokController@index');


Route::get('/prakp', 'praKPController@index');
Route::get('/prakp/tambah', 'praKPController@tambah');
Route::post('/prakp/simpan', 'praKPController@simpan');
Route::get('/prakp/edit/{id_prakp}', 'praKPController@edit');
Route::put('/prakp/updated/', 'praKPController@updated');
Route::get('/prakp/delete/{id_prakp}', 'praKPController@delete');

Route::get('/kp', 'KPController@index');
Route::get('/kp/tambah', 'KPController@tambah');
Route::post('/kp/simpan', 'KPController@simpan');
Route::get('/kp/edit/{id_kp}', 'KPController@edit');
Route::put('/kp/updated/', 'KPController@updated');
Route::get('/kp/delete/{id_kp}', 'KPController@delete');

Route::get('/periode', 'periodeController@index');
Route::post('/periode/tambah', 'periodeController@tambah');

Route::get('/versurat', 'VerSuratController@index');
Route::get('/versurat/edit/{id_skp}', 'VerSuratController@edit');
Route::put('/versurat/updated/', 'VerSuratController@updated');

Route::get('/verprakp', 'VerPraKPController@index');
Route::get('/verprakp/edit/{id_pkp}', 'VerPraKPController@edit');
Route::put('/verprakp/updated/', 'VerPraKPController@updated');

Route::get('/verkp', 'VerKPController@index');
Route::get('/verkp/edit/{id_kp}', 'VerKPController@edit');
Route::put('/verkp/updated/', 'VerKPController@updated');

Route::get('/ujian', 'UjianController@index');
Route::get('/ujian/jadwal/{id_kp}', 'UjianController@jadwal');
Route::post('/ujian/simpan/', 'UjianController@simpan');

Route::get('/lihatbim', 'bimbinganController@index');