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

Route::get('/', 'HomeController@index');
Route::get('/secciones','HomeController@secciones');
Route::get('/secciones/{any}','HomeController@secciones');
Route::post('/savedata','HomeController@store');
Route::get('/getdata','HomeController@getdata');
Route::get('/getDataTwitterUrl','HomeController@getDataTwitterUrl');
Route::get('/getdemoview/{id?}','HomeController@demoview');
Route::get('/getDataExcel','ExcelController@index');
Route::get('/getusuario/{any}','HomeController@getUsuario');
Route::get('/getcategoria/{any}','HomeController@getCategoria');
