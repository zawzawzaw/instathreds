<?php 

class Colour extends Eloquent {

	protected $fillable = array('hex_value');

	public static $rules = array(
		'hex_value' => 'required|min:4'
	);

	public function product() {
		return $this->belongsTo('Product');
	}

	public function shirttype() {
		return $this->belongsTo('Shirttype');
	}
}
