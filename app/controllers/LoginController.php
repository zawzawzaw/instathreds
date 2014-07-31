<?php

class LoginController extends \BaseController {

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
		$this->layout->content = View::make('login.index');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if (Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password')))) {
		    // return Redirect::to('users/profile')->with('message', 'You are now logged in!');
			// print_r(Auth::user()); exit();

		    return Redirect::intended('/')->with('message', 'You are now logged in!');
		} else {
		    return Redirect::to('/')
		        ->with('login_message', 'Your username or password was incorrect.')
		        ->withInput();
		}	
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();
    	return Redirect::to('/');
	}


}
