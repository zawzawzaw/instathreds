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

		    $pwd_char_count = strlen(Input::get('password'));

		    $data = array();
			$data['username'] = Input::get('username');
			$data['email'] = Input::get('email');
			$data['pwd_char_count'] = $pwd_char_count;

			// return $data;

		 	Mail::send('emails.welcome', $data, function($message)
			{
				$message->from('info@instathreds.co', 'Instathreds');
			    $message->to(Input::get('email'), Input::get('username'))->subject('Account Created On Instathreds!');
			});
		 
		    return Redirect::to('/')->with('register_message', 'Thanks for registering! You may now login.');

	    } else {
	        # validation has failed, display error messages
	    	return Redirect::to('/')->with('register_message', 'The following errors occurred:')->withErrors($validator)->withInput();
	    }
	}


}
