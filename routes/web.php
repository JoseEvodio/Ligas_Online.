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
    return view('index');
});
//Route::get('/ligas', 'LigasController@index');
//Route::get('/ligas/create','LigasController@create' );

Route::resource('ligas', 'LigasController')->middleware('auth');

Auth::routes(['reset'=>false]);

Route::get('/home', 'LigasController@index')->name('home');
//Route::get('/ligas/create','LigasController@create' );




