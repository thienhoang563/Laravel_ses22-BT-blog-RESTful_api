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
Route::group(['prefix'=>'post'],function (){
    Route::get ('/','PostController@index')->name('post.index');
    Route::get('/create','PostController@create')->name('post.create');
    Route::post('/create','PostController@store')->name('post.store');
    Route::get('/{id}/edit','PostController@edit')->name('post.edit');
    Route::post('/{id}/edit','PostController@update')->name('post.update');
    Route::get('/{id}/destroy','PostController@destroy')->name('post.destroy');
    Route::get('/{id}/show','PostController@show')->name('post.show');
});