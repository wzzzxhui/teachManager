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


Route::group(['namespace'=>'Verify'],function(){
    Route::get('/login','LoginController@index')->name('loginIndex');
    Route::post('/login','LoginController@login')->name('login');
    Route::get('/register','LoginController@registerIndex')->name('registerIndex');
    Route::post('/register','LoginController@register')->name('register');
    Route::get('/person','LoginController@person')->name('person');
});

