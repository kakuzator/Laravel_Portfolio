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

Route::get('/','HomeController@index');

Route::get('companies/{company}','ConmpanyController@index');

Route::get('companies/{company}/edit','ConmpanyController@showeditform');
Route::post('companies/{company}/edit','ConmpanyController@edit');

