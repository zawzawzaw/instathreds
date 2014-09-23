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

# Front end
Route::get('/', 'HomeController@index');

// users registration / login
Route::resource('register', 'RegisterController', array('only' => array('index', 'store')));
Route::resource('login', 'LoginController', array('only' => array('index', 'store', 'destroy')));

Route::get('logout', array(
  'uses' => 'LoginController@destroy',
  'as' => 'login.destroy'
));

Route::resource('fblogin', 'FbloginController', array('as'=>'fblogin'));
Route::resource('instalogin', 'IngloginController', array('as'=>'instalogin'));

// shirt builder
Route::resource('shirtbuilder', 'ShirtbuilderController', array('as'=>'shirtbuilder'));

// static pages
Route::resource('featured', 'FeaturedController', array('as'=>'featured'));
Route::get('our-story', 'StaticController@ourstory');

/* Back end */
Route::get('admin', 'AdminController@index');
Route::get('admin/users', 'UserController@index');
Route::get('admin/designs', 'ProductController@index');
Route::resource('admin/designs/category/{id}', 'CategoryController@index');



