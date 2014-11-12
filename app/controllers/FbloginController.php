<?php

class FbloginController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		# get data from input
	    $code = Input::get( 'code' );

	    # get fb service
	    $fb = OAuth::consumer( 'Facebook' );

	    # check if code is valid

	    # if code is provided get user data and sign in
	    if ( !empty( $code ) ) {

	        # This was a callback request from facebook, get the token
	        $token = $fb->requestAccessToken( $code );

	        # Send a request with it
	        $result = json_decode( $fb->request( '/me' ), true );

	        # Check if user exists
	        $validator = Validator::make($result, array(
			    'email'=>'required|email|unique:users'
		    ));

	        if ($validator->passes()) {
	        	# Save user in DB
		    	$user = new User;
			    $user->username = $result['name'];
			    $user->email = $result['email'];
			    $user->save();
	        }else {

	        	// $user = User::find(1);
	        	$user = User::findByEmailOrFail($result['email']);

	        	// return $user;

	        	// return Redirect::to('register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
	        }

		    Auth::login($user);

		    if (Auth::check()) {
			    return Redirect::intended('/')->with('message', 'You are now logged in!');
			}else {
				return Redirect::intended('/')->with('message', 'Something went wrong!');
			}

		 //    if (Auth::attempt(array('username'=>$result['name'], 'email'=>$result['email']))) {
			//     return Redirect::intended('/')->with('message', 'You are now logged in!');
			// } else {
			// 	return Redirect::intended('/')->with('message', 'Something wrong!');
			// }

	    }
	    # if not ask for permission first
	    else {
	        # get fb authorization
	        $url = $fb->getAuthorizationUri();

	        # return to facebook login url
	         return Redirect::to( (string)$url );
	    }
	}


}
