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

Route::get('/', function()
{
	// return View::make('hello');

	# get facade class name running in behind

	// $root = get_class(Form::getFacadeRoot());

	// var_dump($root);
	// karlo comment

	return "hello 1";
});

Route::match(array('GET', 'POST'), '/hello/{id}', array('as' => 'hello'), function($id = null)
{
	// return View::make('hello');
	return "hello " . $id;
});