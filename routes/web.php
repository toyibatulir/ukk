<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/login', 'App\Http\Controllers\PagesController@login')->name('showUser');
Route::get('/registrasi', 'App\Http\Controllers\PagesController@registrasi');

Route::get('/home', 'App\Http\Controllers\PagesController@home_masyarakat');
Route::get('/tulis_pengaduan', 'App\Http\Controllers\PagesController@tulis_pengaduan');
Route::get('/simpan_pengaduan', 'App\Http\Controllers\PagesController@simpan_pengaduan');
Route::get('/history', 'App\Http\Controllers\PagesController@history');
Route::get('/detail_pengaduan', 'App\Http\Controllers\PagesController@detail_pengaduan');
Route::get('/lihat_tanggapan', 'App\Http\Controllers\PagesController@lihat_tanggapan');

// system
Route::get('system/index', 'App\Http\Controllers\PagesController@index');

// system admin
Route::get('system/dashboard', 'App\Http\Controllers\PagesController@dashboard_admin');
Route::get('system/verifikasi_pengaduan', 'App\Http\Controllers\PagesController@verifikasi_pengaduan_admin');
Route::get('system/detail_pengaduan', 'App\Http\Controllers\PagesController@detail_pengaduan_admin');
Route::get('system/tanggapan', 'App\Http\Controllers\PagesController@tanggapan_admin');

Route::get('system/lihat_petugas', 'App\Http\Controllers\PagesController@lihat_petugas');
Route::get('system/tambah_petugas', 'App\Http\Controllers\PagesController@tambah_petugas');
Route::get('system/edit_petugas', 'App\Http\Controllers\PagesController@edit_petugas');
Route::get('system/preview_petugas', 'App\Http\Controllers\PagesController@preview_petugas');
Route::get('system/cetak_petugas', 'App\Http\Controllers\PagesController@cetak_petugas');

Route::get('system/lihat_masyarakat', 'App\Http\Controllers\PagesController@lihat_masyarakat');
Route::get('system/preview_masyarakat', 'App\Http\Controllers\PagesController@preview_masyarakat');
Route::get('system/cetak_masyarakat', 'App\Http\Controllers\PagesController@cetak_masyarakat');

Route::get('system/lihat_laporan', 'App\Http\Controllers\PagesController@lihat_laporan');
Route::get('system/preview_pengaduan', 'App\Http\Controllers\PagesController@preview_pengaduan');
Route::get('system/cetak_pengaduan', 'App\Http\Controllers\PagesController@cetak_pengaduan');


Route::get('system/lihat_tanggapan', 'App\Http\Controllers\PagesController@lihat_tanggapan_admin');
Route::get('system/edit_tanggapan', 'App\Http\Controllers\PagesController@edit_tanggapan');
Route::get('system/delete_tanggapan', 'App\Http\Controllers\PagesController@delete_tanggapan');
Route::get('system/preview_tanggapan', 'App\Http\Controllers\PagesController@preview_tanggapan');
Route::get('system/cetak_tanggapan', 'App\Http\Controllers\PagesController@cetak_tanggapan');

// system petugas
// Route::get('system/petugas/dashboard', 'App\Http\Controllers\PagesController@dashboard_petugas');
// Route::get('system/petugas/halaman_petugas', 'App\Http\Controllers\PagesController@halaman_petugas');
// Route::get('system/petugas/verifikasi_pengaduan', 'App\Http\Controllers\PagesController@verifikasi_pengaduan_petugas');
// Route::get('system/petugas/detail_pengaduan', 'App\Http\Controllers\PagesController@detail_pengaduan_petugas');
// Route::get('system/petugas/proses', 'App\Http\Controllers\PagesController@proses');