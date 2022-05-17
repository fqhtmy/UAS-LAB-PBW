<?php

use Illuminate\Support\Facades\Route;
use Illuminate\routing\routes\TemanController; 
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
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/tampildata', 'TemanController@readdata');
Route::get('/tambahdata','TemanController@input');
Route::post('/teman/store', 'TemanController@store');

Route::get('/teman/edit/{kontak}', 'TemanController@edit');
Route::post('/teman/update', 'TemanController@update');
Route::get('/teman/hapus/{kontak}', 'TemanController@hapus');
