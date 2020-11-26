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

Auth::routes();
Route::get('/landing', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registerUser', 'PostsController@createUser')->name('registerUser');
Route::get('/users', 'PostsController@tableUser')->name('users');
Route::get('/userType', 'PostsController@userType')->name('userType');
Route::post('storeUser', 'PostsController@storeUser')->name('storeUser');
// Route::get('login/{login}', 'Auth\LoginController@showLoginForm')->name('login');
Route::resource('posts', 'PostsController');
Route::get('items', 'PostsController@index')->name('items');
Route::get('/tables', 'PostsController@targetTable')->name('tables');
Route::get('/dashboard', 'PostsController@adminView')->name('dashboard');
// Route::resource('landing', 'HomeController');

