<?php 

class Colour extends Eloquent {

	protected $fillable = array('product_id', 'name', 'hex_value');

	public static $rules = array(
		'product_id' => 'required|integer',
		'name' => 'required|min:2',
		'hex_value' => 'required|min:4'
	);

	public function product() {
		return $this->belongsTo('Product');
	}
}
