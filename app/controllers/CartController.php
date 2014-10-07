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
		$size = Input::get('attr.size');
		$color = Input::get('attr.color');
		$shirt_type = Input::get('attr.shirt_type');

		Cart::associate('Product')->add($id, $title, $qty, $price, array('size' => $size, 'color' => $color, 'shirt_type' => $shirt_type));

		return Response::json(array(
		    'success' => true
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
