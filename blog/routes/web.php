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

//Route::get('/', function () {
//    return view('welcome');
//});


//Route::get('/', [
//    'as'=>'posts',
//    'uses'=>'PostController@index'
//]);
Route::get('/', 'PostController@index')->name('posts');
Route::get('/unpublished', 'PostController@unpublished')->name('posts.unpublished');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('post/create', 'PostController@create')->name('post.create');
//Route::post('post', 'PostController@store')->name('post.store');
//Route::get('post/{post}', 'PostController@show')->name('post.show');
//Route::get('post/{post}/edit', 'PostController@edit')->name('post.edit');
//Route::post('post/{post}', 'PostController@update')->name('post.update');


$router->resource('post', 'PostController');