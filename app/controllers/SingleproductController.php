<?php

class SingleproductController extends \BaseController {

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
		$title = Route::input('title');
		$id = Route::input('id');

		$product = Product::find($id);

		$this->layout->content = View::make('singleproduct.index')
			->with('product', $product);

	}


}
