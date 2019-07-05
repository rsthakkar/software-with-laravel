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

Route::resource('/','CustomerController');

Route::get('store','CustomerController@insert');
Route::get('disabled_C','CustomerController@view_all');
Route::get('disable','CustomerController@disable_C');
Route::get('enable','CustomerController@enable_C');
Route::get('editc','CustomerController@edit_C');
Route::get('updatec','CustomerController@update_C');

Route::get('add_data','CustomerController@view_qform');
Route::get('insert_q','OrderController@insert_q');
Route::get('view_invoice','CustomerController@view_invoice');
Route::get('view_last_invoice','CustomerController@view_last_invoice');

