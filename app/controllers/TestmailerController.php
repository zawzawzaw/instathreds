<?php

class TestmailerController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		// $your_email = Input::get('email');
		$data = array();
		// $data['order_id'] = 0000000;
		// $data['redemption_type'] = '';
		// $data['store_location'] = '';
		// $data['shipping_method'] = '';
		// $data['order_items'] = array();
		// $data['items_cost'] = 0;
		// $data['shipping_cost'] = 0;
		// $data['sub_total'] = 0;
		// $data['discount_amount'] = 0;
		// $data['total'] = 0;

		$pwd_char_count = strlen('p@ssword');
		$data['username'] = 'zawzawzaw';
		$data['email'] = 'test@email.com';
		$data['pwd_char_count'] = $pwd_char_count;


		// Mail::send('emails.notifyadmin', $data, function($message)
		// {
		// 	$message->from('admin@instathreds.co', 'Instathreds');
		//     $message->to('info@instathreds.co', 'info@instathreds')->subject('Order Received On Instathreds!');
		// });

		Mail::send('emails.welcome', $data, function($message)
		{
			$message->from('info@instathreds.co', 'Instathreds');
		    $message->to('zawzawzaw@gmail.com', 'info@instathreds')->subject('Order Received On Instathreds!');
		});
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
