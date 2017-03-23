<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get ('pengguna','PenggunaController@awal');
Route::get ('pengguna/tambah','PenggunaController@tambah');
Route::get ('pengguna/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get ('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get ('pengguna/hapus/{pengguna}','penggunaController@hapus');

Route::get ('dosen','dosencontroller@awal');
Route::get ('dosen/tambah','dosencontroller@tambah');

Route::get ('mahasiswa','mahasiswacontroller@awal');
Route::get ('mahasiswa/tambah','mahasiswacontroller@tambah');
Route::get ('mahasiswa/{mahasiswa}','mahasiswaController@lihat');
Route::post('mahasiswa/simpan','mahasiswaController@simpan');
Route::get ('mahasiswa/edit/{mahasiswa}','mahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}','mahasiswaController@update');
Route::get ('mahasiswa/hapus/{mahasiswa}','mahasiswaController@hapus');


Route::get ('matakuliah','matakuliahcontroller@awal');
Route::get ('matakuliah/tambah','matakuliahcontroller@tambah');

Route::get ('dosen_matakuliah','dosen_matakuliahcontroller@awal');
Route::get ('dosen_matakuliah/tambah','dosen_matakuliahcontroller@tambah');

Route::get ('ruangan','ruangancontroller@awal');
Route::get ('ruangan/tambah','ruangancontroller@tambah');
Route::post('ruangan/simpan','ruanganController@simpan');
Route::get ('ruangan/edit/{ruangan}','ruanganController@edit');
Route::post('ruangan/edit/{ruangan}','ruanganController@update');
Route::get ('ruangan/hapus/{ruangan}','ruanganController@hapus');


Route::get ('jadwal_matakuliah','jadwal_matakuliahcontroller@awal');
Route::get ('jadwal_matakuliah/tambah','jadwal_matakuliahcontroller@tambah');


Route::get('/', function () {
    return view('welcome');
});
Route::get('pengguna/{pengguna}',function ($pengguna)
{
	return "Yo whats up nigger";
});
Route::get('berita/{berita?}',function ($berita = "Buaya Hanyut")
{
	return "berita $berita belum di baca wa";
});
