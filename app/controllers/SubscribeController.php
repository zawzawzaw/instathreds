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

	public function designer()
	{
		//
		if (Request::ajax())
		{
			$subscriber_name = Input::get('subscriber_name');
			$subscriber_email = Input::get('subscriber_email');

			//Retrieve an array of lists for your account
			$lists = MailchimpWrapper::lists()->getList();

			// return $lists;

			// Subscribe a user, with email: $email_address, to a list with id: $list_id
			$subscribed = MailchimpWrapper::lists()->subscribe($lists['data'][0]['id'], array('email'=>$subscriber_email));

			if($subscribed) {
				return Response::json('Please check your email to confirm subscription', 200);
			}else 
				return Response::json('Something went wrong while subscribing', 302);

		}
	}

}
