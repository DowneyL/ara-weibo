<?php

use Illuminate\Support\Facades\Route;

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

// 静态页
Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name("help");
Route::get('/about', 'StaticPagesController@about')->name("about");

// 用户相关
Route::get('/sign-up', 'User\UserController@signUp')->name("sign-up");
Route::get('/sign-in', 'User\UserController@signIn')->name("sign-in");
Route::resource('users', 'User\UserController');

Route::post('login', 'User\SessionsController@store')->name("login");
Route::delete('logout', 'User\SessionsController@destroy')->name("logout");
