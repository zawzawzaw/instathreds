<?php

class ContactController extends \BaseController {


	# set template
	protected $layout = "layouts.master";

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

		$categories = Category::all();

		// return 'hello';

		$this->layout->content = View::make('contact.index')
		->with('username', $username)
		->with('categories', $categories);
	}

	public function submit()
	{
		$validator = Validator::make(Input::all(), array(
		    'first_name'=>'required',
		    'last_name'=>'required',
		    'email'=>'required',
		    'phone'=>'required',
		    'enquiry'=>'required',
		    'message'=>'required'
	    ));

	    if ($validator->passes()) {

			$data = array();
			$data['first_name'] = Input::get('first_name');
			$data['last_name'] = Input::get('last_name');
			$data['company_name'] = Input::get('company_name');
			$data['email'] = Input::get('email');
			$data['phone'] = Input::get('phone');
			$data['enquiry'] = Input::get('enquiry');
			$data['msg'] = Input::get('message');

			// return $data;

			Mail::send('emails.contact', $data, function($message)
			{
				$message->from(Input::get('email'), Input::get('username'));
			    $message->to('info@instathreds.co', 'Instathreds')->subject('Received message from Instathreds website!');
			});

			return Redirect::to('contact')->withInput()->with('contact_message', 'Your message has successfully sent!');
		}

		return Redirect::to('contact')->with('contact_message', 'The following errors occurred:')->withErrors($validator)->withInput();
	}
}
