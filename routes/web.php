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

//Route::get('/show','UserController@show');
//Route::get('/laravel','UserController@laravel');
//Route::get('/retrieve','UserController@controller');
//Route::get('/add','UserController@adddata');
Route::get('/create','StudentController@create')->name('create');
Route::get('/retrieve', 'StudentController@welcome');
Route::post('/retrieve', 'StudentController@store')->name('store');
Route::get('delete/{id}','StudentController@destroy');
Route::post('/update/{id}','StudentController@update')->name('update');
Route::get('edit/{id}','StudentController@edit')->name('edit');



