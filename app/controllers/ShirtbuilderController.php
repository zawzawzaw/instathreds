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
		// if (Auth::check())
		// {
		    // $username = Auth::user()->username;
		$username = 'no wifi';
		    $this->layout->content = View::make('shirtbuilder.index', compact('username'));
		// }else {
		// 	return Redirect::to('/')
		//         ->with('message', 'Please Login/Register to start using shirt builder');
		// }
		
	}

}
