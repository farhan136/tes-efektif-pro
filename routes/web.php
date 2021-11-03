<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\BarangController@index')->name('index');

Route::get('/tambah', 'App\Http\Controllers\BarangController@create');

Route::post('kirim', 'App\Http\Controllers\BarangController@store');

Route::get('/edit/{id}', 'App\Http\Controllers\BarangController@edit');

Route::post('update/{id}', 'App\Http\Controllers\BarangController@update');

Route::get('/hapus/{id}', 'App\Http\Controllers\BarangController@destroy');

Route::post('cari', 'App\Http\Controllers\BarangController@cari');
