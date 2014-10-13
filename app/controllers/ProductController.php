<?php

class ProductController extends \BaseController {

	# set template
	protected $layout = "layouts.admin";

	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
	    $this->beforeFilter('admin');
	}

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

		$categories = Category::all();
	    // $products = Product::paginate(8);

	    $products = Product::with('category')->paginate(8);

		$this->layout->content = View::make('products.index')
			->with('username', $username)
			->with('categories', $categories)
			->with('products', $products);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		if (Auth::check())
		{
		    $username = Auth::user()->username;
		}else {
			$username = '';
		}

		$categories = Category::all();

		$this->layout->content = View::make('products.create')
			->with('username', $username)
			->with('categories', $categories);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Product::$rules);
 
	    if ($validator->passes()) {

	        # validation has passed, save user in DB

	    	$product = new Product;
		    $product->category_id = Input::get('category_id');
		    $product->title = Input::get('title');
		    $product->description = Input::get('description');
		    $product->availability = 1;
		    $product->image = Input::get('image');
		    $product->thumbnail_image = Input::get('thumbnail_image');
		    $product->save();
		 
		    return Redirect::to('/admin/designs')->with('message', 'Product successfully added');

	    } else {
	        # validation has failed, display error messages
	    	// print_r($validator); exit();

	    	return Redirect::to('/admin/designs/create')->with('message', 'The following errors occurred:')->withErrors($validator)->withInput();
	    }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		if (Auth::check())
		{
		    $username = Auth::user()->username;
		}else {
			$username = '';
		}

		$categories = Category::all();

		$products = Product::where("category_id", $id)->paginate(8);

	    $this->layout->content = View::make('products.index')
			->with('username', $username)
			->with('categories', $categories)
			->with('products', $products);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		if (Auth::check())
		{
		    $username = Auth::user()->username;
		}else {
			$username = '';
		}

		$categories = Category::all();

		$product = Product::find($id);

		$this->layout->content = View::make('products.edit')
			->with('username', $username)
			->with('categories', $categories)
			->with('product', $product);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		if (Request::ajax())
		{
			$update_data = Input::get('featured');

			$product = Product::find($id);
			$product->featured = filter_var($update_data, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);

			$product->save();

		}else {
			$validator = Validator::make(Input::all(), Product::$rules);
 
		    if ($validator->passes()) {

		        # validation has passed, save user in DB

		    	$product = Product::find($id);
			    $product->category_id = Input::get('category_id');
			    $product->title = Input::get('title');
			    $product->description = Input::get('description');
			    // $product->price = Input::get('price');
			    $product->availability = 1;
			    // $product->stock = Input::get('stock');
			    $product->designer_name = Input::get('designer_name');
			    $product->image = Input::get('image');
			    $product->thumbnail_image = Input::get('thumbnail_image');
			    $product->save();
			 
			    return Redirect::to('/admin/designs/'.$id.'/edit')->with('message', 'Product successfully updated');

		    } else {
		        # validation has failed, display error messages
		    	// print_r($validator); exit();

		    	return Redirect::to('/admin/designs/'.$id.'/edit')->with('message', 'The following errors occurred:')->withErrors($validator)->withInput();
		    }
		}

		return Redirect::to('/admin/designs/'.$id.'/edit')->with('message', 'Something went wrong. Please try again later.');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
