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
    return view('welcome');
});

Route::get('/dte','dteController@index');
Route::get('/dte/tambah','dteController@tambah');
Route::post('/table/store','dteController@store');
Route::get('/table/edit/{id}','dteController@edit');
Route::post('/table/update','dteController@update');
Route::get('/table/hapus/{id}','dteController@hapus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'PageController@index']);
});

//CRUD
//CRUD DOSEN
Route::get('/table','dosenController@index');
Route::get('/dosen/tambah','dosenController@tambah');
Route::post('/dosen/store','dosenController@store');
Route::get('/dosen/edit/{id}','dosenController@edit');
Route::post('/dosen/update','dosenController@update');
Route::get('/dosen/hapus/{id}','dosenController@hapus');