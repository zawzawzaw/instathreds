<?php

class FeaturedController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	# set template
	protected $layout = "layouts.master";

	public function index()
	{
		//
		if (Auth::check())
		{
		    $username = Auth::user()->username;
		}else {
			$username = '';
		}

		//
		$categories = Category::all();
	    $products = Product::where("featured", "1")->paginate(8);

		$this->layout->content = View::make('store.index')
			->with('username', $username)
			->with('categories', $categories)
			->with('products', $products);
	}


}
