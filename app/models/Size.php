<?php 

class Size extends Eloquent {

	protected $fillable = array( 'title' );

	public static $rules = array(
		'title' => 'required|min:4'
	);

	public function shirttype() {
		return $this->belongsTo('Shirttype');
	}
}
