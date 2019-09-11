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

Route::get('/', 'CustomersController@index');
Route::get('/customers/{id}', 'CustomersController@show')->where('id','[0-9]+');
Route::get('/customers/create', 'CustomersController@create');
Route::post('/customers', 'CustomersController@store');
Route::get('/customers/{id}/edit', 'CustomersController@edit')->where('id','[0-9]+');
Route::post('/customers/{id}/invoices', 'InvoicesController@store')->where('id','[0-9]+');
