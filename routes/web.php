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

Route::group(['prefix'=>'v1', 'namespace'=>'V1', 'middleware'=>['cors']], function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/auth/login', 'AuthController@login');
    Route::get('/auth/register', 'AuthController@register');

    Route::get('/auth/profile', 'AuthController@profile');
});