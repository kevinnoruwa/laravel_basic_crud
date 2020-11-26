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

Route::get('/', 'App\Http\Controllers\PostController@index');

Route::get('/post/create', 'App\Http\Controllers\PostController@create');

Route::post('/post', 'App\Http\Controllers\PostController@store');

Route::get('/post/{id}','App\Http\Controllers\PostController@show');

Route::get('/post/{id}/edit', 'App\Http\Controllers\PostController@edit');

Route::put('/post/{id}','App\Http\Controllers\PostController@update');

 Route::delete('/post/{id}','App\Http\Controllers\PostController@destroy');


 
