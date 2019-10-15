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

Route::get('/kontak', 'userDataController@index')->name('userDataIndex');
Route::get('/kontak/search', 'userDataController@search')->name('userDataSearch');

Route::get('/kontak/create', 'userDataController@create_form')->name('userDataCreateForm');
Route::post('/kontak/create', 'userDataController@create')->name('userDataCreate');

Route::get('/kontak/{id}/edit', 'userDataController@edit')->name('userDataEditForm');
Route::post('/kontak/{id}/edit', 'userDataController@update')->name('userDataUpdate');

Route::get('/todo/{id}/delete', 'userDataController@delete')->name('userDataDelete');