<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	# set template
	protected $layout = "layouts.master";

	public function index()
	{
		// print_r(Auth::user());
		if (Auth::check())
		{
		    $username = Auth::user()->username;
		}else {
			$username = '';
		}

		$categories = Category::all();
		$sliders = Slider::all();
		$promos = Promotion::where('current_promo', '=', '1')->first();
	    $products = Product::orderby('created_at', 'desc')->paginate(10);

		$this->layout->content = View::make('home.index')
		->with('username', $username)
		->with('categories', $categories)
		->with('sliders', $sliders)
		->with('promos', $promos)
		->with('products', $products);
	}
}