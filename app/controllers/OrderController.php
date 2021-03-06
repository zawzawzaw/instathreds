<?php

class OrderController extends \BaseController {

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

	    $orders = Order::with(array('shippingaddress','collection'))->orderBy('created_at','DESC')->paginate(8);

	    // return $orders;

		$this->layout->content = View::make('orders.index')
			->with('username', $username)
			->with('orders', $orders);
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
		if (Auth::check())
		{
		    $username = Auth::user()->username;
		}else {
			$username = '';
		}

		if($id=='pending') {
			$orders = Order::with(array('shippingaddress','collection'))->where('status', '=', 'Pending')->orderBy('created_at','DESC')->paginate(8);

			$this->layout->content = View::make('orders.index')
			->with('username', $username)
			->with('orders', $orders);

		}else if($id=='complete') {
			$orders = Order::with(array('shippingaddress','collection'))->where('status', '=', 'Complete')->orderBy('created_at','DESC')->paginate(8);

			$this->layout->content = View::make('orders.index')
			->with('username', $username)
			->with('orders', $orders);

		}else {
			$order = Order::with(array('shippingaddress','collection','ordersitem'))->where('id','=',$id)->orderBy('created_at','DESC')->get();

		    // return $order;

			$this->layout->content = View::make('orders.show')
				->with('username', $username)
				->with('order', $order);
		}

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
		if (Request::ajax())
		{
			$order_status = Input::get('order_status');

			$order = Order::find($id);
			$order->status = $order_status;
			$order->save();

			return Response::json('Successfully updated order status', 200);

		}
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
