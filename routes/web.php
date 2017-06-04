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

Route::get('/', 'HomeController@login');

Auth::routes();

Route::get('/home', 'TransactionController@index');
Route::get('/manual-input', 'CustomerController@input');

Route::post('/customer', 'CustomerController@create');
Route::put('/update-data', 'TransactionController@update');
Route::get('/edit-data/{id}', 'TransactionController@updateForm');
Route::get('/delete-data/{id}', 'TransactionController@delete');
Route::post('/search-acara', 'AcaraController@searchAcara');
Route::post('/search-customer', 'CustomerController@searchCustomer');
Route::get('/acara', 'AcaraController@insertForm');
Route::post('/acara', 'AcaraController@insert');
Route::put('/acara', 'AcaraController@update');
Route::get('/edit-acara/{id}', 'AcaraController@updateForm');
Route::get('/delete-acara/{id}', 'AcaraController@delete');
