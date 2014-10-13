<?php 

class Gender extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'genders';
	
	protected $fillable = array("title");

	public static $rules = array('title'=>'required|min:3');

	public function shirtypes() {
		return $this->hasMany('Shirttype');
	}

} 
?>