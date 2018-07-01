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

Route::get('/lara', function () {
    return view('welcome');
});

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');

/*
Route::get('/hello', function () {
	return view('hello php txt');
    return '<h1>hello php</h1>';
});

Route::get('/user/{id}/{name}', function ($id, $name) {
	return 'This is user ID: '.$id.' & Name: '.$name;
});
*/

Route::get('/about', function () {
	return view('pages/about');
});

