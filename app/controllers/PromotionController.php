<?php

class PromotionController extends \BaseController {

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

		$promos = Promotion::paginate(10);

		$this->layout->content = View::make('promos.index')
			->with('username', $username)
			->with('promos', $promos);
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

		$this->layout->content = View::make('promos.create')
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
		$validator = Validator::make(Input::all(), Promotion::$rules);
 
	    if ($validator->passes()) {

	        # validation has passed, save user in DB

	    	$promo = new Promotion;
		    $promo->image = Input::get('image');
		    $promo->link_1 = Input::get('link_1');
		    $promo->current_promo = Input::get('current_promo');
		    $promo->save();
		 
		    return Redirect::to('/admin/promos')->with('message', 'Promotion successfully added');

	    } else {
	        # validation has failed, display error messages
	    	// print_r($validator); exit();

	    	return Redirect::to('/admin/promos/create')->with('message', 'The following errors occurred:')->withErrors($validator)->withInput();
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

		$promo = Promotion::find($id);

		$this->layout->content = View::make('promos.edit')
			->with('username', $username)
			->with('promo', $promo);
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
		$validator = Validator::make(Input::all(), Promotion::$rules);
 
	    if ($validator->passes()) {

	        # validation has passed, save user in DB

	    	$promo = Promotion::find($id);
		    $promo->image = Input::get('image');
		    $promo->link_1 = Input::get('link_1');
		    $promo->current_promo = Input::get('current_promo');
		    $promo->save();
		 
		    return Redirect::to('/admin/promos/'.$id.'/edit')->with('message', 'Promotion successfully updated');

	    } else {
	        # validation has failed, display error messages
	    	// print_r($validator); exit();

	    	return Redirect::to('/admin/promos/'.$id.'/edit')->with('message', 'The following errors occurred:')->withErrors($validator)->withInput();
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
		$promo = Promotion::find($id);

		$promo->delete();

		return Response::json('Successfully deleted', 200);
	}


}
