<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | This file is where you may define all of the routes that are handled
  | by your application. Just tell Laravel the URIs it should respond
  | to using a Closure or controller method. Build something great!
  |
 */

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/index', 'studentController@index');
Route::get('/create', 'studentController@create');
Route::get('delete/{id}', 'studentController@destroy');
Route::get('edit/{id}', 'studentController@edit');

Route::resource('save', 'studentController@store');
Route::post('update', 'studentController@update');


Auth::routes();

Route::get('/home', 'HomeController@index');
