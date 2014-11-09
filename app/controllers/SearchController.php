<?php

class SearchController extends \BaseController {

	# set template
	protected $layout = "layouts.master";

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		if (Auth::check())
		{
		    $username = Auth::user()->username;
		}else {
			$username = '';
		}

		$search = Input::get('search');

		//
		$categories = Category::all();
	    $products = Product::where('title', 'LIKE', '%'.$search.'%')->paginate(8);			

		$this->layout->content = View::make('search.index')
			->with('username', $username)
			->with('categories', $categories)
			->with('products', $products);
	}

}
