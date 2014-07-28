<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::pattern('id', '[0-9]+');

Route::get('/', 'HomeController@index');

Route::resource('register', 'RegisterController', array('only' => array('index', 'store')));

Route::resource('login', 'LoginController', array('only' => array('index', 'store', 'destroy')));


Route::get('logout', array(
  'uses' => 'LoginController@destroy',
  'as' => 'login.destroy'
));

Route::resource('fblogin', 'FbloginController', array('as'=>'fblogin'));
Route::resource('instalogin', 'IngloginController', array('as'=>'instalogin'));

Route::resource('shirtbuilder', 'ShirtbuilderController', array('as'=>'shirtbuilder'));
