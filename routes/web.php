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

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/secciones','HomeController@secciones')->name('home.secciones');
Route::get('/secciones/{any}','HomeController@secciones');
Route::post('/savedata','HomeController@store')->name('home.savedata');
Route::get('/getdata','HomeController@getdata');
Route::get('/getDataTwitterUrl','HomeController@getDataTwitterUrl');
Route::get('/getdemoview/{id?}','HomeController@demoview');
Route::get('/getDataExcel','ExcelController@index');
Route::get('/getusuario/{any}','HomeController@getUsuario');
Route::get('/getcategoria/{any}','HomeController@getCategoria');
Route::get('/galeria','HomeController@galeria')->name('home.galeria');
Route::get('/tweetrigami','HomeController@tweetrigami')->name('home.tweetrigami');
Route::get('/hackeo-twitter','HomeController@hackeoTwitter')->name('home.hackeotwitter');
Route::get('/hackeo-instagram','HomeController@hackeoInstagram')->name('home.hackeoinstagram');
Route::get('/videos','HomeController@videos');
Route::get('/videos-mob','HomeController@videosMob');
