<?php 

class Builderproduct extends Eloquent {

	protected $fillable = array('title', 'front_image', 'back_image', 'product_details');

	public static $rules = array(
		'title' => 'required|min:2',
		'front_image' => 'required|min:2',
		'back_image' => 'required|min:2',
		'product_details' => 'required'
	);

	public static function slug($title) {
		$slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $title);
        return urlencode(strtolower($slug));
    }
}
