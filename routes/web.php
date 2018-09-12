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

Route::get('/', "PostsController@index");

Route::get('/posts/create', "PostsController@create");

Route::get('/posts/{post}', "PostsController@show");

Route::post('/post', "PostsController@store");

Route::get('/edit/{post}', "PostsController@edit");

Route::patch('/post/{post}', "PostsController@update");

Route::delete('/posts/{post}', "PostsController@destroy");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/facebook', 'AuthController@redirectToProvider_facebook')->name('facebook.login');
Route::get('auth/facebook/callback', 'AuthController@handleProviderCallback_facebook');

Route::get('auth/google', 'GoogleController@redirectToProvider_google')->name('google.login');
Route::get('auth/google/callback', 'GoogleController@handleToProviderCallback_google');

Route::get('auth/twitter', 'TwitterController@redirectToProvider_twitter')->name('twitter.login');
Route::get('auth/twitter/callback', 'TwitterController@handleToProviderCallback_twitter');