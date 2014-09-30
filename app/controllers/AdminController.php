<?php

class AdminController extends BaseController {

	public function __construct() {
	    // $this->beforeFilter('csrf', array('on'=>'post'));
	    $this->beforeFilter('admin');
	}

	# set template
	protected $layout = "layouts.admin";

    /**
     * Show admin.
     */
    public function index()
    {
        $this->layout->content = View::make('admin.index');
    }

    public function uploadfiles()
    {            
        if (Input::hasFile('Filedata')) {
            $file            = Input::file('Filedata');
            $destinationPath = public_path() . "/images/products/thumbs/";
            $orgFilename        = $file->getClientOriginalName();
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $uploadSuccess   = $file->move($destinationPath, $filename);
        }

        if(!empty($uploadSuccess))
            return $filename . '||' . $orgFilename;
        else
            return 'Erorr on ';
    }

}