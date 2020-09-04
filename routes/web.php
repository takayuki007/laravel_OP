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

//ログアウト処理
Route::get('/logout', 'HomeController@logout')->name('logout');

Route::group(['middleware'=>'auth'], function(){
    Route::get('/memo/new', 'MemoController@new')->name('memo.new');
    Route::post('/memo/store', 'MemoController@store')->name('memo.store');
    Route::get('/memo/{id}/edit', 'MemoController@edit')->name('memo.edit');
    Route::post('/memo/{id}/update', 'MemoController@update')->name('memo.update');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/memo/{id}/show', 'MemoController@show')->name('memo.show');


Route::get('/memo/index', 'MemoController@index')->name('memo.index');


