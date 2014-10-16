<?php 

class Order extends Eloquent {
	
	protected $fillable = array("contact_first_name", "contact_last_name", "contact_email", "contact_phone", "sub_total");

	public static $rules = array(
		'contact_first_name'=>'required|min:3',
		'contact_last_name'=>'required|min:3',
		'contact_email'=>'required|min:3',
		'contact_phone'=>'required|min:3'
	);

	public function ordersitem() {
		return $this->hasMany('Ordersitem');
	}

	public function shippingaddress() {
		return $this->hasMany('Shippingaddress');
	}

}