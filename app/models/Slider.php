<?php 

class Slider extends Eloquent {

	protected $fillable = array('image', 'link_1');

	public static $rules = array(
		'image' => 'required',
		'link_1' => 'required'
	);	
}
