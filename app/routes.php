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

/*Route::get('/', function(){
  return Redirect::to('comingsoon.html');
});*/
//Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');

Route::resource('register', 'RegisterController', array('only' => array('index', 'store')));
Route::resource('login', 'LoginController', array('only' => array('index', 'store', 'destroy')));

Route::post('search', array(
  'uses' => 'SearchController@index',
  'as' => 'search'
));

Route::get('logout', array(
  'uses' => 'LoginController@destroy',
  'as' => 'login.destroy'
));
 
Route::match(array('GET', 'POST'), 'account/settings', array(
  'uses' => 'AccountController@index',
  'as' => 'account.settings'
));

Route::post('account/settings/uploadavatarfile', array(
  'uses' => 'AccountController@uploadavatarfile',
  'as' => 'account.settings.uploadavatarfile'
));

Route::match(array('GET', 'POST'), 'account/settings/portrait', array(
  'uses' => 'AccountController@portrait',
  'as' => 'account.settings.portrait'
));

Route::get('account/settings/orderhistory', array(
  'uses' => 'AccountController@orderhistory',
  'as' => 'account.settings.orderhistory'
));

Route::get('account/settings/orderhistory/{id}', array(
  'uses' => 'AccountController@orderhistorydetails',
  'as' => 'account.settings.orderhistorydetails'
));

Route::match(array('GET', 'POST'), 'account/settings/payment', array(
  'uses' => 'AccountController@payment',
  'as' => 'account.settings.payment'
));

Route::match(array('GET', 'POST'), 'account/settings/password', array(
  'uses' => 'AccountController@password',
  'as' => 'account.settings.password'
));

Route::match(array('GET', 'POST'), 'account/settings/cancel', array(
  'uses' => 'AccountController@cancel',
  'as' => 'account.settings.cancel'
));

// Route::get('contact', array(
//   'uses' => 'ContactController@index',
//   'as' => 'contact'
// ));

Route::match(array('GET'), 'contact', array(
  'uses' => 'ContactController@index',
  'as' => 'contact'
));

Route::match(array('POST'), 'contact/submit', array(
  'uses' => 'ContactController@submit',
  'as' => 'contact.submit'
));


Route::resource('fblogin', 'FbloginController');
Route::resource('instalogin', 'IngloginController');

Route::resource('shirtbuilder', 'ShirtbuilderController');
Route::post('shirtbuilder/savepdf', array(
  'uses' => 'ShirtbuilderController@savepdf',
  'as' => 'shirtbuilder.savepdf'
));

Route::get('store/featured', array(
  'uses' => 'FeaturedController@index',
  'as' => 'store.featured'
));
Route::get('store/{name}/{id}', array(
  'uses' => 'StoreController@show',
  'as' => 'store.show'
));
Route::resource('store', 'StoreController');
Route::get('product/{slug}', array(
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

Route::post('singleproduct/getshirts', array(
  'uses' => 'SingleproductController@getshirts',
  'as' => 'singleproduct.getshirts'
));

Route::resource('cart', 'CartController');

Route::match(array('GET', 'POST'), 'checkout', array(
  'uses' => 'CheckoutController@index',
  'as' => 'checkout'
));

Route::post('subscribe', array(
  'uses' => 'SubscribeController@index',
  'as' => 'subscribe'
));

Route::post('subscribe/designer', array(
  'uses' => 'SubscribeController@designer',
  'as' => 'subscribe.designer'
));

Route::post('checkout/checkpromocode', array(
  'uses' => 'CheckoutController@checkpromocode',
  'as' => 'checkout.checkpromocode'
));

Route::post('checkout/confirmorder', array(
  'uses' => 'CheckoutController@confirmorder',
  'as' => 'checkout.confirmorder'
));

Route::get('checkout/thankyou', array(
  'uses' => 'CheckoutController@thankyou',
  'as' => 'thank-you'
));


# Generic Pages #

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
Route::resource('admin/promocodes', 'PromocodeController');
Route::resource('admin/sliders', 'SliderController');
Route::resource('admin/promos', 'PromotionController');

Route::get('testmailer', array(
  'uses' => 'TestmailerController@index',
  'as' => 'testmailer'
));
