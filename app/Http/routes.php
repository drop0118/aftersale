<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/brand-search', ['uses' => 'IndexController@brandSearch']);
Route::get('/cities', ['uses' => 'IndexController@cities']);
Route::get('/brands', ['uses' => 'IndexController@brands']);
Route::get('/brand/{name}/{city?}', ['uses' => 'IndexController@redirect']);
Route::get('/{name}/{city}/{store_id}', ['uses' => 'IndexController@store']);
Route::get('/{city?}', ['uses' => 'IndexController@index']);
Route::get('/{name}/{city}', ['uses' => 'IndexController@brand']);
