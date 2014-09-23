<?php

class UserController extends BaseController {

	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
	    $this->beforeFilter('admin');
	}

	# set template
	protected $layout = "layouts.admin";

    /**
    * List all users.
    */
    public function index()
    {
        $users = User::all();

        $this->layout->content = View::make('users.index', array('users' => $users));
    }    

}