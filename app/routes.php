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

# ACCOUNT 
Route::get('account/settings', array(
  'uses' => 'AccountController@index',
  'as' => 'account-settings'
));

Route::get('account/settings/portrait', array(
  'uses' => 'AccountController@portrait',
  'as' => 'account-portrait'
));

Route::get('account/settings/orderhistory', array(
  'uses' => 'AccountController@orderhistory',
  'as' => 'account-order-history'
));

Route::get('account/settings/payment', array(
  'uses' => 'AccountController@payment',
  'as' => 'account-payment'
));

Route::get('account/settings/password', array(
  'uses' => 'AccountController@password',
  'as' => 'account-password'
));

Route::get('account/settings/cancel', array(
  'uses' => 'AccountController@cancel',
  'as' => 'account-cancel'
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

Route::post('singleproduct/getcolors', array(
  'uses' => 'SingleproductController@getcolors',
  'as' => 'singleproduct.getcolors'
));

Route::post('singleproduct/getsizes', array(
  'uses' => 'SingleproductController@getsizes',
  'as' => 'singleproduct.getsizes'
));

Route::resource('cart', 'CartController');

Route::get('checkout', array(
  'uses' => 'CheckoutController@index',
  'as' => 'checkout'
));

Route::post('checkout/confirmorder', array(
  'uses' => 'CheckoutController@confirmorder',
  'as' => 'checkout.confirmorder'
));

Route::get('checkout/thankyou', array(
  'uses' => 'CheckoutController@thankyou',
  'as' => 'thank-you'
));


# Generic Pages#
Route::get('our-story', array(
  'uses' => 'StaticController@ourstory',
  'as' => 'static.ourstory'
));

Route::get('privacy', array(
  'uses' => 'StaticController@privacy',
  'as' => 'static.privacy'
));

Route::get('terms', array(
  'uses' => 'StaticController@terms',
  'as' => 'static.terms'
));

Route::get('faq', array(
  'uses' => 'StaticController@faq',
  'as' => 'static.faq'
));

Route::get('howto', array(
  'uses' => 'StaticController@howto',
  'as' => 'static.howto'
));

Route::get('calldesigners', array(
  'uses' => 'StaticController@calldesigners',
  'as' => 'static.calldesigners'
));

Route::get('help', array(
  'uses' => 'StaticController@help',
  'as' => 'static.help'
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
Route::resource('admin/orders', 'OrderController');
Route::resource('admin/categories', 'CategoryController');
Route::resource('admin/shirttypes', 'ShirttypeController');

