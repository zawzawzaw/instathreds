<?php 

class Category extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'categories';
	
	protected $fillable = array("name");

	public static $rules = array('name'=>'required|min:3');

	public function products() {
		return $this->hasMany('Product');
	}

} 
?>