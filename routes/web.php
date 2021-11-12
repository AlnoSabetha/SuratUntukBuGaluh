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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function() {
    return view('dashboard');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/surat', 'SuratController@index');

Route::get('/surat/tambahpersonalia', 'SuratController@tambah');

Route::post('/surat/simpan', 'SuratController@simpan');

Route::get('/surat/hapus/{id}', 'SuratController@hapus');

Route::get('/surat/edit/{id}', 'SuratController@edit');

Route::put('/surat/updated/{id}', 'SuratController@updated');
