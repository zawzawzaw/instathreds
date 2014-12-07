<?php 

class AccountController extends\BaseController{


	# set template
	protected $layout = "layouts.master";


	public function index(){

		//
        if (Auth::check())
        {
            $userid = Auth::user()->id;
        }else {
            $userid = '';
        }

        $user = User::find($userid);

        if(Input::has('email')) {
        	$validator = Validator::make(Input::all(), array(
			    'first_name'=>'required',
			    'last_name'=>'required',
			    'email'=>'required'
		    ));
 
		    if ($validator->passes()) {
	        	$user->first_name = Input::get('first_name');
	        	$user->last_name = Input::get('last_name');
	        	$user->email = Input::get('email');
	        	$user->bio = Input::get('bio');
	        	$user->save();

	        	return Redirect::to('/account/settings')->with('message', 'User profile successfully saved');
	        }else {
	        	return Redirect::to('/account/settings')->with('message', 'The following errors occurred:')->withErrors($validator)->withInput();
	        }
        }

		$this->layout->content = View::make('account/settings.index')
		->with('user', $user);
	}

	public function uploadavatarfile() {
		$type = Input::get('type');

        if (Input::hasFile('Filedata')) {
            $file            = Input::file('Filedata');
            
            $destinationPath = public_path() . "/images/avatars/";

            $orgFilename        = $file->getClientOriginalName();
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $uploadSuccess   = $file->move($destinationPath, $filename);
        }

        if(!empty($uploadSuccess))
            return $filename . '||' . $orgFilename;
        else
            return 'Erorr on ';
	}

	public function portrait(){

		//
		if (Auth::check())
        {
            $userid = Auth::user()->id;
        }else {
            $userid = '';
        }

        $user = User::find($userid);

        if(Input::has('avatar')) {
        	$validator = Validator::make(Input::all(), array(
			    'avatar'=>'required'
		    ));
 
		    if ($validator->passes()) {
	        	$user->avatar = Input::get('avatar');
	        	$user->save();
	        }
        }

		$this->layout->content = View::make('account.settings.portrait')
		->with('user', $user);
	}

	public function payment(){

		//
        if (Auth::check())
        {
            $userid = Auth::user()->id;
        }else {
            $userid = '';
        }

        $user = User::with('paymentdetails')->where('id', $userid)->first();

        if(Input::has('first_name')) {

        	$validator = Validator::make(Input::all(), Paymentdetails::$rules);

        	if ($validator->passes()) {

	        	// edit
	        	if(!empty($user->paymentdetails->address)) {

	        		$pd = Paymentdetails::find($user->paymentdetails->id);

	        		$pd->id = $userid;
	        		$pd->first_name = Input::get('first_name');
			        $pd->last_name = Input::get('last_name');
			        $pd->email = Input::get('email');
			        $pd->address = Input::get('address');
			        $pd->address_2 = Input::get('address_2');
			        $pd->city = Input::get('city');
			        $pd->post_zip_code = Input::get('post_zip_code');
			        $pd->state = Input::get('state');
			        $pd->country = Input::get('country');
			        $pd->postal_address = Input::get('postal_address');

			        if($pd->save())
			        	return Redirect::to('/account/settings/payment')->with('message', 'Payment details successfully edited');

	        	}else { // add

	        		$paymentdetail = new Paymentdetails();
			        $paymentdetail->user_id = $userid;
			        $paymentdetail->first_name = Input::get('first_name');
			        $paymentdetail->last_name = Input::get('last_name');
			        $paymentdetail->email = Input::get('email');
			        $paymentdetail->address = Input::get('address');
			        $paymentdetail->address_2 = Input::get('address_2');
			        $paymentdetail->city = Input::get('city');
			        $paymentdetail->post_zip_code = Input::get('post_zip_code');
			        $paymentdetail->state = Input::get('state');
			        $paymentdetail->country = Input::get('country');
			        $paymentdetail->postal_address = Input::get('postal_address');
			        $paymentdetail->save();

			        return Redirect::to('/account/settings/payment')->with('message', 'Payment details successfully added');

	        	}

	        }else {
	        	return Redirect::to('/account/settings/payment')->with('message', 'The following errors occurred:')->withErrors($validator)->withInput();
	        }

	    }

		$this->layout->content = View::make('account.settings.payment')
		->with('user', $user);
	}

	public function orderhistory(){

		//
		if (Auth::check())
		{
		    $email = Auth::user()->email;
		}else {
			$email = '';
		}

		$orders = Order::with(array('shippingaddress', 'collection'))->where('contact_email', '=', $email)->orderBy('created_at','DESC')->paginate(10);

		// return $orders;

		$this->layout->content = View::make('account.settings.orderhistory')->with('orders', $orders);

	}

	public function orderhistorydetails($id){

		//
		if (Auth::check())
		{
		    $email = Auth::user()->email;
		}else {
			$email = '';
		}

		$orders = Order::with(array('ordersitem' ,'shippingaddress', 'collection'))->where('id', '=', $id)->orderBy('created_at','DESC')->paginate(10);

		// return $orders;

		$this->layout->content = View::make('account.settings.orderhistorydetails')->with('orders', $orders);

	}

	public function password(){

		$user = Auth::user();

		if(Input::has('old_password')) {
		    $rules = array(
		        'old_password' => 'required|between:6,12',
		        'new_password'=>'required|between:6,12|confirmed',
    			'new_password_confirmation'=>'required|between:6,12'
		    );

		    $validator = Validator::make(Input::all(), $rules);

		    if($validator->passes()){
		    	$old_password = Input::get('old_password');
		    	$new_password = Input::get('new_password');

		    	if (strlen($old_password) > 0 && !Hash::check($old_password, $user->password)) {

		    		return Redirect::to('/account/settings/password')->withErrors('Please specify the correct current password');
		    	}else {

					$user->password = Hash::make($new_password);

					// finally we save the authenticated user
					$user->save();

					return Redirect::to('/account/settings/password')->with('message', 'New password has successfully set');
		    	}
		    }else {
		    	return Redirect::to('/account/settings/password')->with('message', 'The following errors occurred:')->withErrors($validator)->withInput();
		    }
	    }

		$this->layout->content = View::make('account.settings.password');
	}

	public function cancel(){

		//
        if (Auth::check())
        {
            $userid = Auth::user()->id;
        }else {
            $userid = '';
        }

        $user = User::find($userid);

        if(Input::has('delete')) {

        	if(Input::has('feedback_msg')) {
        		$feedback = new Feedback();
		        $feedback->feedback_msg = Input::get('feedback_msg');
		        $feedback->save();
        	}

	        $user->delete();

	        return Redirect::to('/');
	    }

		$this->layout->content = View::make('account.settings.cancel')
		->with('user', $user);
	}

}

?>
