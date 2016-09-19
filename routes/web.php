<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')
       ->name('home');

Route::get('/login', 'Auth\LoginController@index');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');




Route::get('/administrator', 'AdministratorController@index')
       ->name('administrator');

Route::get('/launch', 'LaunchController@index')->name('launch');
Route::get('/launch/create', 'LaunchController@create')->name('launch_create');
Route::post('/launch/store', 'LaunchController@store')->name('launch_store');
Route::get('/launch/edit/{id}', 'LaunchController@edit')->name('launch_edit');
Route::post('/launch/update', 'LaunchController@update')->name('launch_update');
Route::resource('/launch/delete', 'LaunchController@destroy');

Route::get('/users', 'UsersController@index')->name('users');
Route::get('/users/create', 'UsersController@create')->name('users_create');
Route::post('/users/store', 'UsersController@store')->name('users_store');
Route::get('/users/edit/{id}', 'UsersController@edit')->name('users_edit');
Route::resource('/users/update', 'UsersController@update');
Route::resource('/users/delete', 'UsersController@destroy');