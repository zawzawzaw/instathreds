<?php

class CartController extends \BaseController {

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
		$cart = Cart::content();

		// Cart::destroy();

		// return $cart;

		$this->layout->content = View::make('cart.index')
			->with('cart', $cart);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//

		$id = Input::get('id');
		$title = Input::get('title');
		$price = Input::get('price');
		$qty = Input::get('qty');
		$description = Input::get('attr.description');
		$gender = Input::get('attr.gender');
		$size = Input::get('attr.size');
		$color = Input::get('attr.color');
		$shirt_type = Input::get('attr.shirt_type');
		$image = Input::get('attr.image');
		$back_image = Input::get('attr.back_image');
		$print_image = Input::get('attr.print_image');
		$back_print_image = Input::get('attr.back_print_image');

		Cart::associate('Product')->add($id, $title, $qty, $price, array('description' => $description, 'gender' => $gender,'size' => $size, 'color' => $color, 'shirt_type' => $shirt_type, 'image' => $image, 'back_image' => $back_image, 'print_image' => $print_image, 'back_print_image' => $back_print_image));

		$row = Cart::search(array('id' => $id));

		return Response::json(array(
		    'success' => true,
		    'row' => $row
		));
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
		$data = Input::get('data');

		foreach ($data as $key => $value) {
			Cart::update($value['rowId'], array('qty' => $value['qty']));
		}

		return Response::json(array(
		    'success' => true
		));

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
		Cart::remove($id);

		return Response::json(array(
		    'success' => true
		));
	}


}
