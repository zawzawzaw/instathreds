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

# Front end #

Route::get('/', 'HomeController@index');

Route::resource('register', 'RegisterController', array('only' => array('index', 'store')));
Route::resource('login', 'LoginController', array('only' => array('index', 'store', 'destroy')));

Route::get('logout', array(
  'uses' => 'LoginController@destroy',
  'as' => 'login.destroy'
));

Route::resource('fblogin', 'FbloginController');
Route::resource('instalogin', 'IngloginController');

Route::resource('shirtbuilder', 'ShirtbuilderController');

Route::get('store/featured', array(
  'uses' => 'FeaturedController@index',
  'as' => 'store.featured'
));
Route::get('store/{name}/{id}', array(
  'uses' => 'StoreController@show',
  'as' => 'store.show'
));
Route::resource('store', 'StoreController');
Route::get('product/{title}/{id}', array(
  'uses' => 'SingleproductController@index',
  'as' => 'product'
));

Route::resource('cart', 'CartController');

Route::get('our-story', array(
  'uses' => 'StaticController@ourstory',
  'as' => 'static.ourstory'
));

# Back end #

Route::get('admin', array(
  'uses' => 'AdminController@index',
  'as' => 'admin'
));
Route::get('admin/users', array(
  'uses' => 'UserController@index',
  'as' => 'admin.users'
));
Route::post('admin/uploadfiles', array(
  'uses' => 'AdminController@uploadfiles',
  'as' => 'admin.uploadfiles'
));
Route::resource('admin/designs', 'ProductController');
Route::resource('admin/categories', 'CategoryController');
Route::resource('admin/shirttypes', 'ShirttypeController');

