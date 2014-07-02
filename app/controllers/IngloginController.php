<?php

class IngloginController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		# get data from input
	    $code = Input::get( 'code' );

	    # get ing service
	    $ing = OAuth::consumer( 'Instagram' );

	    # check if code is valid

	    # if code is provided get user data and sign in
	    if ( !empty( $code ) ) {

	        # This was a callback request from facebook, get the token
	        $token = $ing->requestAccessToken( $code );

	        # Send a request with it
	        $result = json_decode( $ing->request( 'users/self' ), true );

	        // $message = 'Your unique instagram user id is: ' . $result['data']['id'] . ' and your name is ' . $result['data']['full_name'];
	        // echo $message. "<br/>";

	        #Var_dump
	        #display whole array().
	        // dd($result['data']['username']); exit();

	        # Check if user exists
	        $validator = Validator::make($result['data'], array(
			    'username'=>'required|unique:users'
		    ));

		    // print_r($validator->passes()); exit();

	        if ($validator->passes()) {
	        	# Save user in DB
		    	$user = new User;
			    $user->username = $result['data']['username'];
			    $user->save();
	        }else {

	        	// $user = User::find(2);
	        	$user = User::findByUsernameOrFail($result['data']['username']);

	        	// return Redirect::to('register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
	        }

	        Auth::login($user);

		    if (Auth::check()) {
			    return Redirect::intended('/')->with('message', 'You are now logged in!');
			}else {
				return Redirect::intended('/')->with('message', 'Something went wrong!');
			}

	    }
	    # if not ask for permission first
	    else {
	        # get ing authorization
	        $url = $ing->getAuthorizationUri();

	        # return to facebook login url
	         return Redirect::to( (string)$url );
	    }
	}


}
