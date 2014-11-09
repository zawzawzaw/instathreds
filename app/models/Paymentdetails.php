<?php 

class Paymentdetails extends Eloquent {

	protected $fillable = array('first_name', 'last_name', 'email', 'address', 'address_2', 'city', 'post_zip_code', 'state', 'country');

	public static $rules = array(
		'first_name' => 'required',
		'last_name' => 'required',
		'email' => 'required',
		'address' => 'required',
		'city' => 'required',
		'post_zip_code' => 'required',
		'country' => 'required'
	);

	public function user() {
		return $this->belongsTo('User');
	}

}