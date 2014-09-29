<?php

class CategoryController extends \BaseController {

	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
	    $this->beforeFilter('admin');
	}

	# set template
	protected $layout = "layouts.admin";

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return Category::all();
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$validator = Validator::make(Input::all(), Category::$rules);

		if($validator->passes()) {
			$category = new Category();
			$category->name = Input::get('name');
			$category->save();

			return Redirect::to('admin/designs');

			// return Response::json(array(
			// 	'success' => true,
			// 	'last_insert_id' => $category->id
			// ), 200);
		}

		// return Response::json(array(
	 //        'error' => true,
	 //        'message' => array($validator->messages()->all());
	 //        ), 200);

		return Redirect::to('admin/designs')->with('errors', $validator->messages()->all());
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


}
