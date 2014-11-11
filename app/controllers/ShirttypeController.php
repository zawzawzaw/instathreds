<?php

class ShirttypeController extends \BaseController {

	# set template
	protected $layout = "layouts.admin";

	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
	    $this->beforeFilter('admin');
	}

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

		$genders = Gender::all();
	    // $products = Product::paginate(8);

	    $shirttypes = Shirttype::with('gender')->paginate(12);

		$this->layout->content = View::make('shirttypes.index')
			->with('username', $username)
			->with('genders', $genders)
			->with('shirttypes', $shirttypes);

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return 'create';
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
		if (Auth::check())
		{
		    $username = Auth::user()->username;
		}else {
			$username = '';
		}

		$genders = Gender::all();

		$shirttypes = Shirttype::where("gender_id", $id)->paginate(8);

	    $this->layout->content = View::make('shirttypes.index')
			->with('username', $username)
			->with('genders', $genders)
			->with('shirttypes', $shirttypes);
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
		if (Auth::check())
		{
		    $username = Auth::user()->username;
		}else {
			$username = '';
		}

		$genders = Gender::all();

		$shirttype = Shirttype::find($id);
		$colours = Shirttype::find($id)->colour;
		$sizes = Shirttype::find($id)->size;

		$this->layout->content = View::make('shirttypes.edit')
			->with('username', $username)
			->with('genders', $genders)
			->with('shirttype', $shirttype)
			->with('colours', $colours)
			->with('sizes', $sizes);
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
		$validator = Validator::make(Input::all(), Shirttype::$rules);

	    if ($validator->passes()) {

	        # validation has passed, save user in DB

	    	$shirttype = Shirttype::find($id);
		    $shirttype->gender_id = Input::get('gender_id');
		    $shirttype->title = Input::get('title');
		    $shirttype->price = Input::get('price');
		    $shirttype->save();

		    // $affectedRows = Colour::where('shirttype_id', '=', $id)->update(array('hex_value' => '#test'));
		    $colour_imports = Input::get('colour_imports');
		    $colour_imports_arr = explode(',', $colour_imports);
		    $size_imports = Input::get('size_imports');
		    $size_imports_arr = explode(',', $size_imports);

		    foreach ($colour_imports_arr as $key => $each_colour_import) {
		    	$colour = Colour::find(Input::get($each_colour_import.'_id'));

		    	if($colour) {
		    		$colour->hex_value = Input::get($each_colour_import);
		    		$colour->save();
		    	}else {
		    		$colour = new Colour;
		    		$colour->shirttype_id = $id;
		    		$colour->hex_value = Input::get($each_colour_import);
		    		$colour->save();
		    	}
		    }

		    foreach ($size_imports_arr as $key => $each_size_import) {
		    	$size = Size::find(Input::get($each_size_import.'_id'));

		    	if($size) {
		    		$size->title = Input::get($each_size_import);
		    		$size->save();
		    	}else {
		    		$size = new Size;
		    		$size->shirttype_id = $id;
		    		$size->title = Input::get($each_size_import);
		    		$size->save();
		    	}
		    }
		 
		    return Redirect::to('/admin/shirttypes/'.$id.'/edit')->with('message', 'Product successfully updated');

	    } else {
	        # validation has failed, display error messages
	    	// print_r($validator); exit();

	    	return Redirect::to('/admin/shirttypes/'.$id.'/edit')->with('message', 'The following errors occurred:')->withErrors($validator)->withInput();
	    }

		return Redirect::to('/admin/shirttypes/'.$id.'/edit')->with('message', 'Something went wrong. Please try again later.');
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
