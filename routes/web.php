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

Route::get('/mhs','mhsController@index');
Route::post('/mhs/create','mhsController@create');
Route::get('/mhs/{id}/edit','mhsController@edit');
Route::post('/mhs/{id}/update','mhsController@update');
Route::get('/mhs/{id}/delete','mhsController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');