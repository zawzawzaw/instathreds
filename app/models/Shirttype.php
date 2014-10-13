<?php 

class Shirttype extends Eloquent {

	protected $fillable = array('title', 'price');

	public static $rules = array(
		'gender_id' => 'required|integer',
		'title' => 'required|min:2',
		'price' => 'required|numeric'
	);

	public function gender() {
		return $this->belongsTo('Gender');
	}

	public function colour() {
		return $this->hasMany('Colour');
	}

	public function size() {
		return $this->hasMany('Size');
	}

	public static function slug($title) {
		$slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $title);
        return urlencode(strtolower($slug));
    }
}
