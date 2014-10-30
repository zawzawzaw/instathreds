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

		//
		if (Auth::check())
		{
		    $email = Auth::user()->email;
		}else {
			$email = '';
		}

		$orders = Order::with(array('shippingaddress', 'collection'))->where('contact_email', '=', $email)->orderBy('created_at','DESC')->paginate(10);

		// return $orders;

		$this->layout->content = View::make('account/settings.orderhistory')->with('orders', $orders);

	}

	public function password(){
		$this->layout->content = View::make('account/settings.password');
	}

	public function cancel(){
		$this->layout->content = View::make('account/settings.cancel');
	}

}

?>
