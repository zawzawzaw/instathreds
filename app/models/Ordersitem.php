<?php 

class Ordersitem extends Eloquent {
	
	protected $fillable = array("qty, price, options");

	public static $rules = array(
		'order_id'=>'required',
		'product_id'=>'required',
		'qty' => 'required',
		'price' => 'required',
		'options' => 'required'
	);

	public function order() {
		return $this->belongsTo('Order');
	}

}