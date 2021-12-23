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

Route::get('/', 'PostController@top');

Route::resource('posts', 'PostController');

Route::resource('likes','LikeController')->only(['index','store','destroy']);

Route::resource('stores', 'StoreController')->only([
  'index', 'store', 'destroy'
]);
 
Route::get('/store', 'StoreController@storeIndex');

Auth::routes();

Route::get('/posts/{post}/edit_image', 'PostController@editImage')->name('posts.edit_image');
 
Route::patch('/posts/{post}/edit_image', 'PostController@updateImage')->name('posts.update_image');

Route::resource('users', 'UserController');

Route::get('users/{user}/edit_image','UserController@editImage')->name('users.edit_image');

Route::patch('users/{user}/edit_image','UserController@updateImage')->name('users.update_image');

Route::patch('/posts/{post}/toggle_like','PostController@toggleLike')->name('posts.toggle_like');

Route::get('posts/{post}','PostController@show')->name('posts.show');

Route::get('posts/{item}/confirm','PostController@postConfirm')->name('posts.confirm');

Route::post('posts/{item}/finish','PostController@postFinish')->name('posts.finish');


