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
		//
		if (Auth::check())
		{
		    $username = Auth::user()->username;
		}else {
			$username = '';
		}

		$categories = Category::all();
	    $products = Product::paginate(8);

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
		$categories = Category::all();

		$this->layout->content = View::make('products.create')->with('categories', $categories);
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
		    $product->price = Input::get('price');
		    $product->availability = 1;
		    $product->stock = Input::get('stock');
		    $product->image = Input::get('image');
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
		$categories = Category::all();

		$products = Product::where("category_id", $id)->paginate(8);

	    // $users = Paginator::make($data->items, $data->totalItems, 1);

	    $this->layout->content = View::make('products.index')
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
