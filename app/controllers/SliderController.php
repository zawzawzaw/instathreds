<?php

class SliderController extends \BaseController {

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

		$sliders = Slider::paginate(10);

		$this->layout->content = View::make('sliders.index')
			->with('username', $username)
			->with('sliders', $sliders);
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

		$this->layout->content = View::make('sliders.create')
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
		$validator = Validator::make(Input::all(), Slider::$rules);
 
	    if ($validator->passes()) {

	        # validation has passed, save user in DB

	    	$slider = new Slider;
		    $slider->image = Input::get('image');
		    $slider->link_1 = Input::get('link_1');
		    $slider->save();
		 
		    return Redirect::to('/admin/sliders')->with('message', 'Slider successfully added');

	    } else {
	        # validation has failed, display error messages
	    	// print_r($validator); exit();

	    	return Redirect::to('/admin/sliders/create')->with('message', 'The following errors occurred:')->withErrors($validator)->withInput();
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

		$slider = Slider::find($id);

		$this->layout->content = View::make('sliders.edit')
			->with('username', $username)
			->with('slider', $slider);
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
		$validator = Validator::make(Input::all(), Slider::$rules);
 
	    if ($validator->passes()) {

	        # validation has passed, save user in DB

	    	$slider = Slider::find($id);
		    $slider->image = Input::get('image');
		    $slider->link_1 = Input::get('link_1');
		    $slider->save();
		 
		    return Redirect::to('/admin/sliders/'.$id.'/edit')->with('message', 'Slider successfully updated');

	    } else {
	        # validation has failed, display error messages
	    	// print_r($validator); exit();

	    	return Redirect::to('/admin/sliders/'.$id.'/edit')->with('message', 'The following errors occurred:')->withErrors($validator)->withInput();
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
		$slider = Slider::find($id);

		$slider->delete();

		return Response::json('Successfully deleted', 200);
	}


}
