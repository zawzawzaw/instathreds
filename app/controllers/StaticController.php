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

		$this->layout->content = View::make('static.ourstory')->with('username', $username);

	}

}
