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

Route::get('/', function () {
    return view('master');
});
Route::get('/pertanyaan','PertanyaanController@index');
Route::get('/pertanyaan/create','PertanyaanController@create');
Route::get('/pertanyaan/create1/{id}','PertanyaanController@create1');

Route::post('/pertanyaan','PertanyaanController@store');
Route::get('/pertanyaan/{id_jb}','PertanyaanController@show');
Route::get('/pertanyaan/{id_jb}/edit','PertanyaanController@edit');
Route::put('/pertanyaan/{id_jb}','PertanyaanController@update');
Route::get('/pertanyaan/{id_jb}/delete','PertanyaanController@delete');
Route::get('/pertanyaan/jawab','PertanyaanController@create');


Route::get('/jawaban','JawabanController@index');
Route::post('/jawaban','JawabanController@store');
Route::get('/jawaban/{id_jb}','JawabanController@show');
Route::get('/jawaban/creates','JawabanController@creates');