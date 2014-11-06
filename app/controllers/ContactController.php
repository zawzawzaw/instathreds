<?php

class ContactController extends \BaseController {


	# set template
	protected $layout = "layouts.master";

	/**
	 * Show Our Story
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

		$this->layout->content = View::make('contact.index')
		->with('username', $username)
		->with('categories', $categories);
	}



}
