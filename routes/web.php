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
Route::get('/', "HomeController@nologin");
Route::get('/login', "HomeController@index");
Route::post('/login', "HomeController@index");
Route::get('/home', "HomeController@userpage");
Route::post('/home', "HomeController@userpage");
Route::get('/homeadmin', "HomeController@adminpage");
Route::post('/homeadmin', "HomeController@adminpage");
Route::post('/home/detailpage', "HomeController@detailpage");
Route::resource('news', 'HomeController');
