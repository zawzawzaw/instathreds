<?php 

class Gender extends Eloquent {
	
	protected $fillable = array("title");

	public static $rules = array('title'=>'required|min:3');

	public function shirttype() {
		return $this->hasMany('Shirttype');
	}

}