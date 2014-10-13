<?php 

class AccountController extends\BaseController{


	# set template
	protected $layout = "layouts.master";


	public function index(){
		$this->layout->content = View::make('account/settings.index');
	}

	public function portrait(){
		$this->layout->content = View::make('account/settings.portrait');
	}

	public function payment(){
		$this->layout->content = View::make('account/settings.payment');
	}

	public function orderhistory(){
		$this->layout->content = View::make('account/settings.orderhistory');
	}

	public function password(){
		$this->layout->content = View::make('account/settings.password');
	}

	public function cancel(){
		$this->layout->content = View::make('account/settings.cancel');
	}

}

?>
