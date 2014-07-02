<?php

class RegisterController extends \BaseController {

	# set template
	protected $layout = "layouts.master";

	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->layout->content = View::make('register.index');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), User::$rules);
 
	    if ($validator->passes()) {

	        # validation has passed, save user in DB
	    	$user = new User;
		    $user->username = Input::get('username');
		    $user->email = Input::get('email');
		    $user->password = Hash::make(Input::get('password'));
		    $user->save();
		 
		    return Redirect::to('register')->with('message', 'Thanks for registering!');

	    } else {
	        # validation has failed, display error messages
	    	return Redirect::to('register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
	    }
	}


}
