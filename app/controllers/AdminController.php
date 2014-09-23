<?php

class AdminController extends BaseController {

	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
	    $this->beforeFilter('admin');
	}

	# set template
	protected $layout = "layouts.admin";

    /**
     * Show admin.
     */
    public function index()
    {
        $this->layout->content = View::make('admin.index');
    }

    /**
    * list all designs
    */
    public function designs()
    {
        $categories = Category::all();

        $this->layout->content = View::make('admin.designs', array('categories' => $categories));     
    }

}