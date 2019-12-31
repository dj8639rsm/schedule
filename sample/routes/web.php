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

use App\Http\Middleware\HelloMiddleware;

Route::get('hello','HelloController@index');
Route::get('hello/add','HelloController@add');
Route::get('hello/show','HelloController@show');
Route::get('person','PersonController@index');
Route::get('person/find', 'PersonController@find');
    
Route::post('hello','HelloController@post');
Route::post('hello/add', 'Hellocontroller@create');
Route::post('person/find','personcontroller@search');
