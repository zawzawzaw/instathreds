<?php 

class Product extends Eloquent {

	protected $fillable = array('category_id', 'title', 'description', 'price', 'availability', 'image');

	public static $rules = array(
		'category_id' => 'required|integer',
		'title' => 'required|min:2',
		'description' => 'required|min:2',
		// 'price' => 'required|numeric',
		'designer_name' => 'required|min:2',
		'availability' => 'integer',
		'image' => 'required'
	);

	public function category() {
		return $this->belongsTo('Category');
	}

	public function colour() {
		return $this->hasMany('Colour');
	}

	public static function slug($title) {
		$slug = Str::slug($title);
        return urlencode(strtolower($slug));
    }
}
