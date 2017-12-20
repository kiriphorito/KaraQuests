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

Route::get('/request', 'SearchController@index');
Route::get('/search', 'SearchController@search');
Route::get('requests/precreate/{id}', 'RequestsController@precreate');

Route::get('/csv_upload', 'ImportsController@csv_upload');
Route::post('/csv_add', 'ImportsController@csv_add');

Route::resource('songs' , 'SongsController');
Route::resource('requests' , 'RequestsController');