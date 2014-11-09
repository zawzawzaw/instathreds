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
			$lists = MailchimpWrapper::lists()->getList()['data'];

			//Subscribe a user, with email: $email_address, to a list with id: $list_id
			$subscribed = MailchimpWrapper::lists()->subscribe($lists[1]['id'], array('email'=>$subscribe_email));

			if($subscribed) {
				return Response::json('Please check your email to confirm subscription', 200);
			}else 
				return Response::json('Something went wrong while subscribing', 302);

		}
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
