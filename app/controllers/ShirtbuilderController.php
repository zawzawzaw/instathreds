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
			$username = 'guest';
		    $this->layout->content = View::make('shirtbuilder.index', compact('username'));
			// return Redirect::to('/')
		 //        ->with('message', 'Please Login/Register to start using shirt builder');
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
		    
			$front_base64_str = substr(Input::get('front_print_image'), strpos(Input::get('front_print_image'), ",")+1);
			$front_decoded = base64_decode($front_base64_str);
			$back_base64_str = substr(Input::get('back_print_image'), strpos(Input::get('back_print_image'), ",")+1);
			$back_decoded = base64_decode($back_base64_str);

			$destinationPath = public_path() . "/images/builder_products/";
			$front_print_image_filename = str_random(6) . '_' . 'front_print_image.png';
			$back_print_image_filename = str_random(6) . '_' . 'back_print_image.png';
			$front_image_url = $destinationPath.$front_print_image_filename;
			$back_image_url = $destinationPath.$back_print_image_filename;

			$front_result = file_put_contents($front_image_url, $front_decoded);
			$back_result = file_put_contents($back_image_url, $back_decoded);

		    if($front_result) 
		    	$builderproduct->front_print_image = $front_print_image_filename;
		    if($back_result) 
		    	$builderproduct->back_print_image = $back_print_image_filename;

		    $builderproduct->product_details = Input::get('product_details');
		    $builderproduct->save();

		    $builderproduct_id = $builderproduct->unique_builder_product_id;

		    if($builderproduct_id){
		    	return Response::json(array('product_id' => $builderproduct_id, 'front_print_image' => $front_print_image_filename, 'back_print_image' => $back_print_image_filename));
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
