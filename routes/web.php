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

Route::get('/', 'IngresoController@index')->name('user.index');
Route::get('/registrar' , 'IngresoController@create')->name('user.create');
Route::get('/editar/{user}' , 'IngresoController@edit')->name('user.edit'); //le faltan parametros.
