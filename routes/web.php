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

Route::get('/','CompanyController@index');

Route::get('companies/{id}','CompanyController@detail')->name('companies.detail');

Route::get('companies/{id}/edit','ConmpanyController@showeditform');
Route::post('companies/{id}/edit','ConmpanyController@edit');

