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
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');
Route::get('/login', 'App\Http\Controllers\PendudukController@login');

Route::get('/penduduk', 'App\Http\Controllers\PendudukController@index');
Route::get('/penduduk/tambah','App\Http\Controllers\PendudukController@tambah');
Route::post('/penduduk/store','App\Http\Controllers\PendudukController@store');
Route::get('/penduduk/edit/{id}','App\Http\Controllers\PendudukController@edit');
Route::post('/penduduk/update','App\Http\Controllers\PendudukController@update');
Route::get('/penduduk/hapus/{id}','App\Http\Controllers\PendudukController@hapus');