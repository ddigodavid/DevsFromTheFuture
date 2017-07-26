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
Route::get('/', 'HomeController@home')->name('home');
Route::get('/home', 'HomeController@home');
Route::get('/acknowledgement', 'HomeController@acknowledgement')->name('acknowledgement');

Route::get('/diversidade/{slug}', 'Posts\\PostsController@diversity')->name('diversity.index');
Route::get('/tendencias/{slug}', 'Posts\\PostsController@tendencies')->name('tendencies.index');
Route::get('/habilidades/{slug}', 'Posts\\PostsController@skills')->name('skills.index');
Route::get('/post/test', function () {
    return view('posts.test');
});

Route::post('/register', 'Auth\\RegisterController@register')->name('register');

Route::get('/show-me-the-leads', 'HomeController@excel')->name('show-me-the-leads');
Route::get('/show-me-all-the-leads', 'HomeController@excelAllLeads')->name('show-me-all-the-leads');