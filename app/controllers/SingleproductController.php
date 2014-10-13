<?php

class SingleproductController extends \BaseController {
	
	# set template
	protected $layout = "layouts.master";

	public function index()
	{
		//
		$title = Route::input('title');
		$id = Route::input('id');

		$product = Product::find($id);

		$category = Category::find($product->category_id);

		$all_shirttypes = Shirttype::with('gender')->get();

		// return $all_shirttypes;

		$gender_mens = Gender::where('title', 'Mens')->first();
		$gender_womens = Gender::where('title', 'Womens')->first();
		$gender_kids = Gender::where('title', 'kids')->first();

		$men_shirttypes = Gender::find($gender_mens->id)->shirttype;

		// men's default shirttype to get colour and size
		$men_standard_shirttype = Gender::find($gender_mens->id)->shirttype->first();
		$men_standard_colours = Shirttype::find($men_standard_shirttype->id)->colour;
		$men_standard_sizes = Shirttype::find($men_standard_shirttype->id)->size;

		$women_shirttypes = Gender::find($gender_womens->id)->shirttype;
		$kid_shirttypes = Gender::find($gender_kids->id)->shirttype;

		$related_products = Product::where("category_id", $product->category_id)->paginate(12);

		$this->layout->content = View::make('singleproduct.index')
			->with('product', $product)
			->with('category', $category)
			->with('related_products', $related_products)
			->with('all_shirttypes', $all_shirttypes)
			->with('men_shirttypes', $men_shirttypes)
			->with('women_shirttypes', $women_shirttypes)
			->with('kid_shirttypes', $kid_shirttypes)
			->with('men_standard_shirttype', $men_standard_shirttype)
			->with('men_standard_colours', $men_standard_colours)
			->with('men_standard_sizes', $men_standard_sizes);

	}

	public function getcolors()
	{
		//
		if (Request::ajax())
		{
			$id = Input::get('id');

			$colours = Shirttype::find($id)->colour;			

			return $colours;
		}
		

	}

	public function getsizes()
	{

		//
		if (Request::ajax())
		{
			$id = Input::get('id');

			$sizes = Shirttype::find($id)->size;			

			return $sizes;
		}
	}


}
