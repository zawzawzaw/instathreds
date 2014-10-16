<?php 

class Collection extends Eloquent {
	
	protected $fillable = array("title");

	public static $rules = array(
		'order_id'=>'required',
		'country' => 'required',
		'address_1' => 'required',
		'city' => 'required',
		'state' => 'required',
		'post_zip_code' => 'required'
	);

	public function order() {
		return $this->belongsTo('Order');
	}

}