<?php

class StoreController extends \BaseController {

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
	    $products = Product::orderby('created_at', 'desc')->paginate(20);

		$this->layout->content = View::make('store.index')
			->with('username', $username)
			->with('categories', $categories)
			->with('products', $products);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($name, $id)
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

		$products = Product::where("category_id", $id)->paginate(20);

	    $this->layout->content = View::make('store.index')
			->with('username', $username)
			->with('categories', $categories)
			->with('products', $products);
	}


}
