<?php

class UserController extends BaseController {

	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
	    // $this->beforeFilter('admin');
	}

	# set template
	protected $layout = "layouts.admin";

    /**
    * List all users.
    */
    public function index()
    {
        $users = User::all();

        $this->layout->content = View::make('users.index', array('users' => $users));
    }

    public function destory($id)
    {

        // $validator = Validator::make(Input::all(), Feedback::$rules);

        // if($validator->passes()){
            
            $feedback = new Feedback();
            $feedback->feedback_msg = Input::get('feedback_msg');
            $feedback->save();

            $user = User::find($id);
            $user->delete();

            return Redirect::to('/');

        // }else {
        //     return Redirect::to('/account/settings/cancel')->with('message', 'The following errors occurred:')->withErrors($validator)->withInput();
        // }

    }

}