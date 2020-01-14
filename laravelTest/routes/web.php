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

Route::get('/', function () {
    return view('welcome');
});

Route::get('getall', 'UserController@index');
Route::get('createArray', 'UserController@createArray');
Route::get('createobj', 'UserController@createobj');

Route::get('getLimit5', 'UserController@getLimit5');



Route::get('gettoken', function() {
    return csrf_token(); 

  });