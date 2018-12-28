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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('auth/register', 'Auth\RegisterController@register');

Route::get('/auth/login', 'Auth\LoginController@showLoginForm');
Route::post('/auth/login', 'Auth\LoginController@login');
Route::get('/auth/logout', 'Auth\LoginController@logout');

#歌詞を投稿する
Route::resource('posts', 'PostController');

#歌詞を探す
Route::get('/searches', 'Search\SearchController@index');

#user
Route::resource('users', 'UserController');

#勉強用
Route::get('foo', function () {
    return 'Foo!';
});

Route::get('foo/foo1', 'PracticeController@foo1');
Route::get('foo/foo2', 'PracticeController@foo2');
Route::get('foo/foo3', 'PracticeController@foo3');
Route::get('foo/foo4', 'PracticeController@foo4');
