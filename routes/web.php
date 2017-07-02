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

Route::get('/students','StudentController@index');
Route::get('/students/create','StudentController@create');
Route::post('/students','StudentController@store');
Route::get('/students/{id}','StudentController@show');
Route::get('/students/{id}/edit','StudentController@edit');
Route::patch('/students/{id}','StudentController@update');
Route::delete('/students/{id}/delete','StudentController@destroy');


