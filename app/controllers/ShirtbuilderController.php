<?php

class ShirtbuilderController extends \BaseController {

	# set template
	protected $layout = "layouts.shirtbuilder";

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Auth::check())
		{
		    $username = Auth::user()->username;
		    $this->layout->content = View::make('shirtbuilder.index', compact('username'));
		}else {
			return Redirect::to('/')
		        ->with('message', 'Please Login/Register to start using shirt builder');
		}
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Builderproduct::$rules);
 
	    if ($validator->passes()) {

	        # validation has passed, save user in DB

	    	$builderproduct = new Builderproduct;
		    $builderproduct->unique_builder_product_id = str_random(40);
		    $builderproduct->title = Input::get('title');
		    $builderproduct->front_image = Input::get('front_image');
		    $builderproduct->back_image = Input::get('back_image');
		    $builderproduct->product_details = Input::get('product_details');
		    $builderproduct->save();

		    $builderproduct_id = $builderproduct->unique_builder_product_id;

		    if($builderproduct_id){
		    	return Response::json(array('product_id' => $builderproduct_id));
		    }else {
		    	return Response::json(array('error' => 'Error occured while saving builder product.'));
		    }
		 
		    // return Redirect::to('/admin/designs')->with('message', 'Product successfully added');

	    } else {
	        # validation has failed, display error messages
	    	// print_r($validator); exit();

	    	return Response::json(array('error' => 'Error occured while saving builder product.'));
	    }
	}

}
