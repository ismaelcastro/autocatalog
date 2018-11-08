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
Route::get('/index', 'CarController@index');
Route::get('/car/new', 'CarController@create');
Route::post('/car/new', 'CarController@store');
Route::get('/car/edit/{id}', 'CarController@edit');
Route::put('/car/update/{id}', 'CarController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
