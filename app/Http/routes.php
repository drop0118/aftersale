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

Route::get('/', ['uses' => 'IndexController@index']);
Route::get('brand-search', ['uses' => 'IndexController@brandSearch']);
Route::get('brand/{name}/{city?}', ['uses' => 'IndexController@brand']);
