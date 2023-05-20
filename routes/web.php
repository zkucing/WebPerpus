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

// route blog
Route::get('/', 'App\Http\Controllers\BlogController@home');
Route::get('/home', 'App\Http\Controllers\BlogController@home');
Route::get('/lihat-peminjaman', 'App\Http\Controllers\PeminjamanController@lihat');
Route::get('/input-peminjaman', 'App\Http\Controllers\PeminjamanController@input');
Route::get('/input-pengembalian', 'App\Http\Controllers\PeminjamanController@pengembalian');

// route Create
Route::post('/input-peminjaman/simpan','App\Http\Controllers\PeminjamanController@simpan');

//route read
Route::get('/lihat-peminjaman/edit/{id}','App\Http\Controllers\PeminjamanController@edit');

// route update
Route::post('/lihat-peminjaman/update','App\Http\Controllers\PeminjamanController@update');

// route delete
Route::get('/lihat-peminjaman/hapus/{id}','App\Http\Controllers\PeminjamanController@hapus');