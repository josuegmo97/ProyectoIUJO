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
Route::post('/registrar' , 'IngresoController@store')->name('user.store');
Route::get('/editar/{user}' , 'IngresoController@edit')->name('user.edit')->where(['user' => '[0-9]+']); //le faltan parametros.
Route::delete('/editar/{user}' ,'IngresoController@destroy')->name('user.destroy');
Route::put('/editar/{user}' ,'IngresoController@update')->name('user.update');
Route::get('/definitiva' , 'IngresoController@definitive')->name('user.definitive');
