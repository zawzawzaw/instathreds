<?php

class StaticController extends \BaseController {


	# set template
	protected $layout = "layouts.master";

	/**
	 * Show Our Story
	 *
	 * @return Response
	 */
	public function ourstory()
	{
		//
		if (Auth::check())
		{
		    $username = Auth::user()->username;
		}else {
			$username = '';
		}

		$categories = Category::all();

		$this->layout->content = View::make('static.ourstory')
		->with('username', $username)
		->with('categories', $categories);
	}


	//Privacy Policy
	public function privacy()
	{
		//
		if (Auth::check())
		{
		    $username = Auth::user()->username;
		}else {
			$username = '';
		}

		$categories = Category::all();

		$this->layout->content = View::make('static.privacy')
		->with('username', $username)
		->with('categories', $categories);
	}

	//Terms of Use
	public function terms()
	{
		//
		if (Auth::check())
		{
		    $username = Auth::user()->username;
		}else {
			$username = '';
		}

		$categories = Category::all();

		$this->layout->content = View::make('static.terms')
		->with('username', $username)
		->with('categories', $categories);
	}

	//Terms of Use
	public function faq()
	{
		//
		if (Auth::check())
		{
		    $username = Auth::user()->username;
		}else {
			$username = '';
		}

		$categories = Category::all();

		$this->layout->content = View::make('static.faq')
		->with('username', $username)
		->with('categories', $categories);
	}

	//Terms of Use
	public function howto()
	{
		//
		if (Auth::check())
		{
		    $username = Auth::user()->username;
		}else {
			$username = '';
		}

		$categories = Category::all();

		$this->layout->content = View::make('static.howto')
		->with('username', $username)
		->with('categories', $categories);
	}

	//Calling all Designers
	public function calldesigners()
	{
		//
		if (Auth::check())
		{
		    $username = Auth::user()->username;
		}else {
			$username = '';
		}

		$categories = Category::all();

		$this->layout->content = View::make('static.calldesigners')
		->with('username', $username)
		->with('categories', $categories);
	}

	//Help
	public function help()
	{
		//
		if (Auth::check())
		{
		    $username = Auth::user()->username;
		}else {
			$username = '';
		}

		$categories = Category::all();

		$this->layout->content = View::make('static.help')
		->with('username', $username)
		->with('categories', $categories);
	}


}
