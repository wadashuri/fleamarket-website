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

Route::get('/diaries','DiaryController@index');

Route::get('/diaries/create','DiaryController@create');

Route::post('/diaries', 'DiaryController@store');

Route::get('/diaries/{id}/edit','DiaryController@edit');

Route::patch(' /diaries/{id}','DiaryController@update');

Route::delete(' /diaries/{id}','DiaryController@destroy');

Route::get('/session_sample', 'SampleController@sessionSample');

