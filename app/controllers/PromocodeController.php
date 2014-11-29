<?php

class PromocodeController extends \BaseController {

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

		$promocodes = Promocode::paginate(10);

		$this->layout->content = View::make('promocodes.index')
			->with('username', $username)
			->with('promocodes', $promocodes);
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

		$this->layout->content = View::make('promocodes.create')
			->with('username', $username);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$validator = Validator::make(Input::all(), Promocode::$rules);
 
	    if ($validator->passes()) {

	        # validation has passed, save user in DB

	    	$promocode = new Promocode;
		    $promocode->unique_promo_code = Input::get('unique_promo_code');
		    $promocode->discount_type = Input::get('discount_type');
		    $promocode->amount = Input::get('amount');
		    $promocode->number_of_usage = 0;
		    $expiry_date = DateTime::createFromFormat('d/m/Y', Input::get('expiry_date'));
		    $promocode->expiry_date = $expiry_date->format('Y-m-d');
		    $promocode->usage_limit = Input::get('usage_limit');
		    $promocode->save();
		 
		    return Redirect::to('/admin/promocodes')->with('message', 'Promo code successfully added');

	    } else {
	        # validation has failed, display error messages
	    	// print_r($validator); exit();

	    	return Redirect::to('/admin/promocodes/create')->with('message', 'The following errors occurred:')->withErrors($validator)->withInput();
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
		return $id;
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

		$promocode = Promocode::find($id);

		$this->layout->content = View::make('promocodes.edit')
			->with('username', $username)
			->with('promocode', $promocode);
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
		$validator = Validator::make(Input::all(), Promocode::$rules);
 
	    if ($validator->passes()) {

	        # validation has passed, save user in DB

	    	$promocode = Promocode::find($id);
		    $promocode->unique_promo_code = Input::get('unique_promo_code');
		    $promocode->discount_type = Input::get('discount_type');
		    $promocode->amount = Input::get('amount');
		    $promocode->number_of_usage = Input::get('number_of_usage');
		    $expiry_date = DateTime::createFromFormat('d/m/Y', Input::get('expiry_date'));
		    $promocode->expiry_date = $expiry_date->format('Y-m-d');
		    $promocode->usage_limit = Input::get('usage_limit');
		    $promocode->save();
		 
		    return Redirect::to('/admin/promocodes/'.$id.'/edit')->with('message', 'Promo code successfully updated');

	    } else {
	        # validation has failed, display error messages
	    	// print_r($validator); exit();

	    	return Redirect::to('/admin/promocodes/'.$id.'/edit')->with('message', 'The following errors occurred:')->withErrors($validator)->withInput();
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
		return $id;
	}


}
