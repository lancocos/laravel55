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
    Abort(404);
    return view('welcome');
});
Route::get('/hello', function () {
    return view('hello');
});
Route::get('/test','TestController@index');
Route::get('addUser','TestController@addUser');
Route::resource('demo','DemoController');
Route::resource('user','UserController');
Route::get('users','UsersController@index');