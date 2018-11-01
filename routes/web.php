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

Route::get('/index', function () {
    return view('index');
});

Route::get('/halamandua', function () {
    return view('halamandua');
});
Route::resource('halaman', 'lara');
Route::get('lara/tambah', 'lara@tambah');

Route::resource('mahasiswa', 'Mahasiswa');
Route::get('/mhs_create', function () {
    return view('mhs_create');
});

Route::resource('user_models', 'User');
Route::resource('usr_create', 'User');
Route::get('/usr_create', function () {
    return view('usr_create');
});
