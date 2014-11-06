<?php 

class Promocode extends Eloquent {

	protected $fillable = array('unique_promo_code', 'number_of_usage', 'expiry_date', 'usage_limit');

	public static $rules = array(
		'unique_promo_code' => 'required|min:4',
		'expiry_date' => 'required',
		'usage_limit' => 'required'
	);

}
