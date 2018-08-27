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

Route::get('/home', 'HomeController@index')->name('home');

//google
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

//github
Route::get('auth/{{provider}}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{{provider}}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/addQuestion', function () {
    return view('AddQuestion');
});
