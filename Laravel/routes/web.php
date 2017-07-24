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

Route::get('/register-in-the-future', 'HomeController@index')->name('register.form');
Route::get('/', 'HomeController@home');
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/acknowledgement', 'HomeController@acknowledgement')->name('acknowledgement');

Route::post('/register', 'Auth\\RegisterController@register')->name('register');