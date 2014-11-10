<?php

class SubscribeController extends \BaseController {

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
		//
		if (Request::ajax())
		{
			$subscribe_email = Input::get('subscribe_email');

			//Retrieve an array of lists for your account
			$lists = MailchimpWrapper::lists()->getList();

			//Subscribe a user, with email: $email_address, to a list with id: $list_id
			$subscribed = MailchimpWrapper::lists()->subscribe($lists['data'][1]['id'], array('email'=>$subscribe_email));

			if($subscribed) {
				return Response::json('Please check your email to confirm subscription', 200);
			}else 
				return Response::json('Something went wrong while subscribing', 302);

		}
	}

}
