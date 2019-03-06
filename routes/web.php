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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','DaftaruserController@index');

Route::get('/daftaruser','DaftaruserController@index');
Route::post('/daftaruser','DaftaruserController@store');
Route::post('/ajax_universitas','DaftaruserController@ajax_universitas');
// Route::get('/captcha','DaftaruserController@captcha');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
