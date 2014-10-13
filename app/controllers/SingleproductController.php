<?php

class SingleproductController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	# set template
	protected $layout = "layouts.master";

	public function index()
	{
		//
		$title = Route::input('title');
		$id = Route::input('id');

		$product = Product::find($id);

		$category = Category::find($product->category_id);

		$shirttype = Shirttype::find(1);
		$colours = Shirttype::find(1)->colour;
		$sizes = Shirttype::find(1)->size;

		$related_products = Product::where("category_id", $product->category_id)->paginate(12);

		$this->layout->content = View::make('singleproduct.index')
			->with('product', $product)
			->with('category', $category)
			->with('related_products', $related_products)
			->with('shirttype', $shirttype)
			->with('colours', $colours)
			->with('sizes', $sizes);

	}


}
