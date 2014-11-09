<?php

class CheckoutController extends \BaseController {


	# set template
	protected $layout = "layouts.master";

	public function __construct() {
	    // $this->beforeFilter('csrf', array('on'=>'post'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$cart = Cart::content();

		// return $cart;

		$promo_code = Input::get('promo_code');

		if(Cart::count() <= 0){
			return Redirect::intended('/cart');
		}

		//
		if (Auth::check())
		{
		    $user_id = Auth::user()->id;
		    $user = User::find($user_id);
		}else {
			$user = "";
		}

		$this->layout->content = View::make('checkout.index')
			->with('cart', $cart)
			->with('user', $user)
			->with('promo_code', $promo_code);
	}

	public function checkpromocode() {

		if (Request::ajax())
		{
			$promo_code = Input::get('promo_code');
			
			$found = Promocode::where('unique_promo_code', '=', $promo_code)->first();

			if($found) {
				$usage = $found->number_of_usage;
				$valid = Promocode::where('unique_promo_code', '=', $promo_code)->where('usage_limit', '>', $usage)->first();
			}

			$returnData = array(
			    'status' => 'error',
			    'message' => 'Promo code is invalid or expired!'
			);

			if($found && $valid) return $found;
			else return Response::json($returnData, 302);

		}

	}
     
    public function confirmorder() {

    	$validator = Validator::make(Input::all(), array(
			'contact_first_name'=>'required|min:3',
			'contact_last_name'=>'required|min:3',
			'contact_email'=>'required|min:3',
			'contact_phone'=>'required|min:3'
		));

		// 'number'=>'required',
		// 	'exp_month'=>'required',
		// 	'exp_year'=>'required',
		// 	'cvc'=>'required'
 
	    if ($validator->passes()) {

	        # validation has passed, save user in DB

	    	$order = new Order;
		    $order->contact_first_name = Input::get('contact_first_name');
		    $order->contact_last_name = Input::get('contact_last_name');
		    $order->contact_email = Input::get('contact_email');
		    $order->contact_phone = Input::get('contact_phone');

		    // shipping cost
		    if(Input::get('redemption_type')=="shipping") {
		    	if(Input::get('country')=="Australia") $shipping_cost = 6;
		    	else if(Input::get('country')!="") $shipping_cost = 20;
		    }else {
		    	$shipping_cost = 0;
		    }

		    $order->sub_total = Cart::total();
		    $order->shipping_cost = $shipping_cost;
		    $total = Cart::total() + $shipping_cost;

		    // discount by promo
		    $promo_code = Input::get('promo_code');
		    if(!empty($promo_code)) {
		    	$found = Promocode::where('unique_promo_code', '=', $promo_code)->first();

				if($found) {
					$usage = $found->number_of_usage;
					$promocode = Promocode::where('unique_promo_code', '=', $promo_code)->where('usage_limit', '>', $usage)->first();
				}
		    	
		    	if($promocode) {
		    		if($promocode->discount_type==='%') {
		    			$discount_amount = $total * (floatval($promocode->amount)/100);
		    		}else {
		    			$discount_amount = floatval($promocode->amount);
		    		}

		    		$total = $total - $discount_amount;
		    	}
		    }

		    $order->discount = $discount_amount;
		    $order->total = $total;
		    $order->status = 'Pending';

			// Use the config for the stripe secret key
			Stripe::setApiKey(Config::get('stripe.stripe.secret'));

			// Get the credit card details submitted by the form
			$token = Input::get('stripeToken');

			// Create the charge on Stripe's servers - this will charge the user's card
			//Input::get('card_number')
			//Input::get('exp_month')
			//Input::get('exp_year')
			//Input::get('cvc')

			try {
				$cents = bcmul($total, 100);
			    $charge = Stripe_Charge::create(array(
			      "amount" => $cents, // amount in cents
			      "currency" => "aud",
			      "card"  => array(
			      	'number' => Input::get('number'),  //test acc // 4242 4242 4242 4242
			      	'exp_month' => Input::get('exp_month'), 
			      	'exp_year' => Input::get('exp_year'), 
			      	'cvc' => Input::get('cvc')
			      ),
			      "description" => 'Charge for Instathreds products',
			      "receipt_email" => Input::get('contact_email')
			      )
			    );

			} catch(Stripe_CardError $e) {
			    $e_json = $e->getJsonBody();
			    $error = $e_json['error'];

			    // The card has been declined
			    // redirect back to checkout page
			    return Redirect::to('/checkout')
			        ->withInput()->with('message', $error['message']);
			}
			// Maybe add an entry to your DB that the charge was successful, or at least Log the charge or errors
			// Stripe charge was successfull, continue by redirecting to a page with a thank you message

			$order->save();

			if(!empty($promo_code)) {
				$promocode->number_of_usage = $promocode->number_of_usage + 1;
				$promocode->save();
			}

		    $order_id = $order->id;

		    $cart = Cart::content();

		    foreach ($cart as $key => $row) {
		    	$ordersitem = new Ordersitem;
		    	$ordersitem->order_id = $order_id;
		    	$ordersitem->product_name = $row->name;
		    	$ordersitem->product_id = $row->id;
			    $ordersitem->qty = $row->qty;
			    $ordersitem->price = $row->price;
			    $ordersitem->options = $row->options;
			    $ordersitem->save();
		    }

		    if(Input::get('redemption_type')=="shipping") {
			    $shippingaddress = new Shippingaddress;
			    $shippingaddress->order_id = $order_id;
			    $shippingaddress->country = Input::get('country');
			    $shippingaddress->address_1 = Input::get('address_1');
			    $shippingaddress->address_2 = Input::get('address_2');
			    $shippingaddress->city = Input::get('city');
			    $shippingaddress->state = Input::get('state');
			    $shippingaddress->post_zip_code = Input::get('post_zip_code');
			    $shippingaddress->save();
			}else {
				$collection = new Collection;
				$collection->order_id = $order_id;
				$collection->store_location = Input::get('store_location');
				$collection->save();
			}

			Cart::destroy();

			return Redirect::to('checkout/thankyou?order_id='.$order_id);

	    } else {
	        # validation has failed, display error messages
	    	// print_r($validator); exit();

	    	return Redirect::to('/checkout')->with('message', 'The following errors occurred:')->withErrors($validator)->withInput();
	    }

        // if (!empty($this->data)) {                     
            //build nvp string
            //use your own logic to get and set each variable
            // $returnURL = Router::url(array('controller'=>'purchases','action'=>'paypal_return'),true);
            // $cancelURL = Router::url(array('controller'=>'purchases','action'=>'paypal_cancel'),true);
            // $nvpStr=
            //  "RETURNURL=$returnURL&CANCELURL=$cancelURL"
            // ."&PAYMENTREQUEST_0_CURRENCYCODE=SGD"
            // ."&PAYMENTREQUEST_0_AMT=10.00"  
            // ."&PAYMENTREQUEST_0_ITEMAMT=10.00"
            // ."&AYMENTREQUEST_0_PAYMENTACTION=Sale"
            // ."&L_PAYMENTREQUEST_0_ITEMCATEGORY0=Digital"  
            // ."&L_PAYMENTREQUEST_0_NAME0=test"
            // ."&L_PAYMENTREQUEST_0_QTY0=1"
            // ."&L_PAYMENTREQUEST_0_AMT0=10.00"          
            // ;           
            // //do paypal setECCheckout
            // if(Paypal::setExpressCheckout($nvpStr)) {
            //     $result = $paypal->getPaypalUrl($paypal->token);
            // }else {
            //     print_r($paypal->errors);
            //     $result=false;
            // }
             
            // if(false!==$result) {
            //     $this->redirect($result);
            // }else {
            //     exit();
            // }
        // }
    }
     
     /*
     * page when user clicks on Cancel on Paypal page
     */
    function paypal_cancel($id=null) {
        // $this->layout = 'clean';    
        // $this->render('paypal_back');   
    }
 
    /*
     *redirects buyer after the buyer approves the payment
     */
    function paypal_return($id=null) {
        // $payerId    = $this->params['url']['PayerID'];
        // $token      = $this->params['url']['token'];  
        // //get nvp string
        // //use your own logic to get and set each variable
        // $nvpStr=
        //      "TOKEN=$token&PAYERID=$payerId"
        //     ."&PAYMENTREQUEST_0_CURRENCYCODE=SGD"
        //     ."&PAYMENTREQUEST_0_AMT=10.00"  
        //     ."&PAYMENTREQUEST_0_ITEMAMT=10.00"
        //     ."&AYMENTREQUEST_0_PAYMENTACTION=Sale"
        //     ."&L_PAYMENTREQUEST_0_ITEMCATEGORY0=Digital"  
        //     ."&L_PAYMENTREQUEST_0_NAME0=test"
        //     ."&L_PAYMENTREQUEST_0_QTY0=1"
        //     ."&L_PAYMENTREQUEST_0_AMT0=10.00"
        //     ;
        // //do paypal setECCheckout
        // App::import('Model','Paypal');
        // $paypal = new Paypal();
        // if($paypal->doExpressCheckoutPayment($nvpStr)) {
        //     $result = true;
        // }else {
        //     $this->log($paypal->errors);
        //     $result = false;
        // }       
         
        // if (false==$result) {
        //     $this->Session->setFlash(__('Error while making payment, Please try again', true),'message_fail');
        // } else {
        //     $this->Session->setFlash(__('Thank you for purchasing our deal.', true),'message_ok');
        // }          
         
        // $this->render('paypal_back');   
    }

    public function thankyou() {
    	//return View::make('checkout.thankyou');
    	$order_id = Input::get('order_id');

    	$this->layout->content = View::make('checkout.thankyou')->with('order_id', $order_id);
    }

}
