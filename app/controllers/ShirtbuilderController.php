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
		    
			// $front_base64_str = substr(Input::get('front_print_image'), strpos(Input::get('front_print_image'), ",")+1);
			// $front_decoded = base64_decode($front_base64_str);

			// if(!empty(Input::get('back_print_image'))) {
				// $back_base64_str = substr(Input::get('back_print_image'), strpos(Input::get('back_print_image'), ",")+1);
				// $back_decoded = base64_decode($back_base64_str);
			// }

			// $destinationPath = public_path() . "/images/builder_products/";
			// $front_print_image_filename = str_random(6) . '_' . 'front_print_image.png';
			
			// if(!empty(Input::get('back_print_image')))
				// $back_print_image_filename = str_random(6) . '_' . 'back_print_image.png';
			// else
				// $back_print_image_filename = '';

			// $front_image_url = $destinationPath.$front_print_image_filename;
			// $back_image_url = $destinationPath.$back_print_image_filename;

			// $front_result = file_put_contents($front_image_url, $front_decoded);

			// if(!empty(Input::get('back_print_image')))
				// $back_result = file_put_contents($back_image_url, $back_decoded);

		    // if($front_result) {
		    	$builderproduct->front_print_image = Input::get('front_print_image');
		    	$builderproduct->back_print_image = Input::get('back_print_image');
		    // }
		    // else {
		    // 	$builderproduct->front_print_image = '';
		    // 	$builderproduct->back_print_image = '';
		    // }

		    $builderproduct->product_details = Input::get('product_details');
		    $builderproduct->save();

		    $builderproduct_id = $builderproduct->unique_builder_product_id;

		    if($builderproduct_id){
		    	return Response::json(array('id' => $builderproduct->id, 'product_id' => $builderproduct_id, 'front_print_image' => Input::get('front_print_image'), 'back_print_image' => Input::get('front_print_image')));
		    }else {
		    	return Response::json(array('error' => 'Error occured while saving builder product..'));
		    }
		 
		    // return Redirect::to('/admin/designs')->with('message', 'Product successfully added');

	    } else {
	        # validation has failed, display error messages
	    	// print_r($validator); exit();

	    	return Response::json(array('error' => 'Error occured while saving builder product.'));
	    }
	}

	public function savepdf()
    {
		$cart_row_id = Input::get('cart_row_id');
		$builder_prod_id = Input::get('builder_prod_id');
		$pdf = Input::get('pdf');

		// return $builder_prod_id . ' ' . $cart_row_id;

		$pdf_base64_str = substr(Input::get('pdf'), strpos(Input::get('pdf'), ",")+1);
		$pdf_decoded = base64_decode($pdf_base64_str);

		$destinationPath = public_path() . "/images/builder_products/";
		$pdf_filename = str_random(6) . '_' . 'print.pdf';

		$pdf_url = $destinationPath.$pdf_filename;
		$pdf_result = file_put_contents($pdf_url, $pdf_decoded);


		if($pdf_result) {
	    	$builderproduct = Builderproduct::find($builder_prod_id);
	    	$builderproduct->front_print_image = $pdf_filename;
	    	$builderproduct->back_print_image = $pdf_filename;
	    	$builderproduct->save();

	    	Cart::update($cart_row_id, array('print_image' => $pdf_filename, 'back_print_image' => $pdf_filename));

	    	return Redirect::to('/cart');
		}
    }

}
