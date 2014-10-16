@section('content')
<!-- CONTENT -->
<section class="content checkout">
  <div class="container">
    <h6 class="section-title"><i class="fa fa-lock"></i>SECURE CHECKOUT</h6>
	<ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    <div class="row">
      
      <!-- left column  -->
      <div class="eight column">
      	{{ Form::open(array('url'=>'checkout/confirmorder', 'class'=>'form-checkout')) }}
        <div class="panel shipping">
          <div class="heading">
            <h6>SHIPPING OR COLLECTION</h6>
            @if(!Auth::check())
            <p>
            	<a href="#login-modal" class="login-link" data-id="login">Login</a> or 
            	<a href="#login-modal" class="signup-link" data-id="signup">create an account</a> for faster checkout
            </p>  
            @endif
          </div>

          <!-- left column -->
          <div class="left">
            <h6>Contact Details</h6>
            <div class="form-group">
              <input type="text" name="contact_first_name" class="text form-control" value="@if($user){{ $user->username }}@endif" placeholder="First Name">
            </div>
            <div class="form-group">
              <input type="text" name="contact_last_name" class="text form-control" placeholder="Last Name">
            </div>
            <div class="form-group">
              <input type="text" name="contact_email" class="text form-control" value="@if($user){{ $user->email }}@endif" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="text" name="contact_phone" class="text form-control" placeholder="Phone">
            </div>
            <div class="form-group">
              <input type="checkbox" name="newsletter" id="newsletter" class="css-checkbox lrg" checked="checked"/>
              <label for="newsletter" class="css-label lrg">Receive Instathreds email updates</label>
            </div>
          </div>
          <!-- end of left column -->

          <!-- right column -->
          <div class="right" style="min-height: 270px;">
            <input type="radio" name="redemption_type" checked="checked" value="collection" style="display: inline-block;margin-left: 1px;"><h6 style="display: inline-block;width: 262px;padding-left: 10px;">I wish to collect my order from</h6>
            
            <div class="collect">
            	<a href="" class="store-loc storeloc-link"><i class="fa fa-info-circle"></i>Store Location</a>
	            <div class="choose-store" style="margin:20px 0 0;">
	              <div class="left">
	                <input type="radio" name="store_location" checked="checked" value="robina-store" style="display: inline-block;margin-left: 1px;">
                  <h6 style="display: inline-block;width:auto;padding-left: 10px;">Robina Store</h6>
	              </div>
	              <div class="right">
	                <input type="radio" name="store_location" value="carindale-store" style="display: inline-block;margin-left: 1px;">
                  <h6 style="display: inline-block;width:auto;padding-left: 10px;">Carindale Store</h6>
                </div>
	            </div>
            </div>

            <input type="radio" name="redemption_type" value="shipping" style="display: inline-block;margin-left: 1px;"><h6 style="display: inline-block;width: 262px;padding-left: 10px;">Ship to this address</h6>
            <div class="ship">
	            <div class="form-group">
	              <div class="select-style">
	                <select name="country" id="country-select">
	                  <option value="Australia">Australia</option>
	                  <option value="Philippines">Philippines</option>
	                  <option value="Indonesia">Indonesia</option>
	                  <option value="Singapore">Singapore</option>
	                  <option value="Myanmar">Myanmar</option>
	                </select>
	              </div>
	            </div>
	            <div class="form-group">
	              <input name="address_1" type="text" class="text form-control" placeholder="Address Line 1">
	            </div>
	            <div class="form-group">
	              <input name="address_2" type="text" class="text form-control" placeholder="Address Line 2(optional)">
	            </div>
	            <div class="form-group">
	              <input name="city" type="text" class="text form-control" placeholder="City or Suburb">
	            </div>
	            <div class="form-group">
	              <div class="select-style">
	                <select name="state">
	                  <option value="" disabled selected>State, Region or Province</option>
	                  <option value="VIC">VIC</option>
	                  <option value="NSW">NSW</option>
	                  <option value="BRIS">BRIS</option>
	                </select>
	              </div>
	            </div>
	            <div class="form-group">
	              <input type="text" name="post_zip_code" class="text form-control" placeholder="Zip or Post Code">
	            </div>
	            <h6 style="margin-top:20px;">Shipping Method</h6>
	            <div class="choose-method">
	              <div class="form-group">
	                <input type="radio" name="shipmethod-standard" value="shipmethod-standard" style="display: inline-block;margin-left: 1px;">
                  <h6 style="display: inline-block;width: 262px;padding-left:5px;">Standard (5-15 Business Days)</h6>
                </div>
                <div>
                  <input type="radio" name="shipmethod-express" value="shipmethod-express" style="display: inline-block;margin-left: 1px;">
                  <h6 style="display: inline-block;width: 262px;padding-left:5px;">Express (3-7 Business Days)</h6>
                </div>

	            </div>

            </div>
          </div>
          <!-- end of right column -->

          <!-- <div class="separator-line"></div>-->

          <div style="text-align:center;margin-bottom:20px;">
            <!-- <a href="" class="btn btn-primary continuepayment" >CONTINUE PAYMENT</a> -->
            <!--
            {{ Form::submit('CONTINUE PAYMENT', array('class'=>'btn btn-primary continuepayment'))}}
            -->
		  	<!--<script
			    src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
			    data-key="{{ Config::get('stripe.stripe.public') }}"
			    data-amount="{{ Cart::total() }}"
			    data-name="Cart Item(s)"
			    data-description="{{ Cart::count() }} item(s)  (${{ Cart::total() }})"
			    data-image="">
		  	</script>-->
          </div>
        </div>

        <div class="panel payment">
          <div class="heading">
            <h6>ENTER YOUR PAYMENT DETAILS</h6>
          </div>          
              
            <fieldset id="cc_fields">
              <div class="cc-card-number-wrap">
                <label for="card_number">
                  Card Number<span class="cc-required-indicator">*</span>
                </label>
                <input type="text" name="number" autocomplete="off" class="card-number form-control" placeholder="Card number">
              </div>

              <div class="cc-card-cvv-wrap">
                <label for="card_number">
                  CVV<span class="cc-required-indicator">*</span>
                </label>
                <input type="text" name="cvc" size="4" autocomplete="off" class="card-number form-control" placeholder="Security Code">
              </div>

              <div class="cc-card-name-wrap">
                <label for="card_number">
                  Name on the card<span class="cc-required-indicator">*</span>
                </label>
                <input type="text" name="card_name" autocomplete="off" class="card-number form-control" placeholder="Card Name">
              </div>

              <div class="cc-card-expiration-wrap">
                <label for="card_exp_month">
                  Expiration(MM/YY)<span class="cc-required-indicator">*</span>
                </label>
                <div class="select-style">
                  <select id="card_exp_month" name="exp_month" class="card-expiry-month">
                  	<option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>     
                  </select>
                </div>
                <span class="exp-divider"> / </span>
                <div class="select-style">
                  <select id="card_exp_year" name="exp_year" class="card-expiry-year">
                  	<option value="2014">14</option><option value="2015">15</option><option value="2016">16</option><option value="2017">17</option><option value="2018">18</option><option value="2019">19</option><option value="2020">20</option><option value="2021">21</option><option value="2022">22</option><option value="2023">23</option><option value="2024">24</option>      
                  </select>
                </div>
              </div>

            </fieldset>

            <div class="separator-line"></div>
            <div class="purchase-wrap">
              <p class="lead">
                This is a one-time payment. Let's do this!  
              </p>  
            	{{ Form::submit('PURCHASE NOW', array('class'=>'btn btn-primary purchase'))}}
              <p class="secure-payment"><i class="fa fa-lock"></i> Super-secure 128-bit SSL encrypted payment.</p>
              <div class="payment-logos">
        Secure credit card payments by {{ HTML::image('images/stripe.png', '', array('class' => 'stripe-logo')) }}
        </div>
            </div>


            {{ Form::close() }}

          
        </div>

      </div>
      <!-- end of left column  -->
      
      <!-- right column  -->
      <div class="four column">
        <!-- order summary -->
        <div class="panel ordersummary">
          <div class="heading">
            <h6>ORDER SUMMARY</h6>
          </div>
          <div class="panel-inside">
            <table class="table-order">
            	@if(Cart::count() > 0)
		          	@foreach($cart as $row)
						<tr>
		                	<td>
		                		<a href="{{ URL::to('product', array(Product::slug($row->product->title), $row->product->id)) }}">
		                			<img src="{{ $row->options->image }}" style="width:30px;">
		                		</a>
		                	</td>
		                	<td>
		                		<a href="{{ URL::to('product', array(Product::slug($row->product->title), $row->product->id)) }}">{{ $row->product->title }}<br>({{ $row->qty }}) {{ $row->product->title }}, {{ $row->options->size }}</a>
		                	</td>
		                	<td><p>${{ $row->price }}</p></td>
		              	</tr>
	            	@endforeach
            	@endif
              
              <!-- <tr>
                <td><a href=""><img src="images/image-placeholder1.png" style="width:30px;"></a></td>
                <td>
                <a href="">Space Scorpion<br>
                (1) Mens T-Shirt, XL, Arctic Bl...</a>
                </td>
                <td>$33.00</td>
              </tr>
              <tr>
                <td><a href=""><img src="images/image-placeholder1.png" style="width:30px;"></a></td>
                <td>
                <a href="">Space Scorpion<br>
                (1) Mens T-Shirt, XL, Arctic Bl...</a>
                </td>
                <td>$33.00</td>
              </tr> -->
            </table>
            <div class="separator-line"></div>
            <div class="total">
              <table>
                <tbody>
                  <tr>
                    <td>
                      <p>Subtotal:</p>    
                    </td>
                    <td>
                    @if(Cart::count() > 0)
                      <p>${{ Cart::total() }}</p>    
                    @endif
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p>Shipping:</p>    
                    </td>
                    <td>
                      <p class="shipping-price">$0.00</p>    
                    </td>
                  </tr>  
                </tbody>
                <tfoot>
                  <tr>
                    <td>Total:</td>
                    @if(Cart::count() > 0)
                    	<td class="total-price">${{ Cart::total() }}</td>  
                    @endif
                  </tr>
                </tfoot>
              </table>  
            </div>
          </div>
        </div>
        <!-- end of order summary -->
        
        <!-- coupon -->
        <div class="panel coupon">
          <div class="coupon">
            <h6>Enter your gift, coupon or store code</h6>
            <input type="text" class="text coupon-input" placeholder="ENTER CODE">
            <button class="btn btn-primary">APPLY</button>
          </div>  
        </div>
        <!-- end of coupon -->
        

      </div>
      <!-- end of right column  -->
      
    </div>  
    
  </div>
</section>
{{ HTML::script('js/vendor/jquery-2.1.1.js') }}
<script>
	$(".login-link").on("click",function(){
		$('#login-modal').modal('show')
		var id = $(this).attr("data-id");
		$('#login-tab a:first').tab('show');	
	});

	$(".signup-link").on("click",function(){
		console.log('hi')
		$('#login-modal').modal('show')
		var id = $(this).attr("data-id");
		$('#login-tab a:last').tab('show');	
	});	

	var $totalPrice = $('.total-price');
	var $shippingPrice = $('.shipping-price');

	$("input[type=radio][name='redemption_type']").on('change', function(e){
		if(this.value=='collection') {
			$('.ship').slideUp();
			$('.collect').slideDown();

			$totalPrice.text( '$' + parseFloat('{{ Cart::total() }}').toFixed(2) );
		}else {
			$('.ship').slideDown();
			$('.collect').slideUp();

			if($("#country-select").val() == "Australia") var shippingCost = 6;
			else var shippingCost = 20;

			newTotalPrice = parseFloat('{{ Cart::total() }}') + shippingCost;

			$totalPrice.text( '$' + newTotalPrice.toFixed(2) );
			$shippingPrice.text( '$' + shippingCost );
		}
	});

	$('#country-select').on('change', function(e){
		if( $(this).val() == "Australia" ) var shippingCost = 6;
		else var shippingCost = 20;

		newTotalPrice = parseFloat('{{ Cart::total() }}') + shippingCost;

		$totalPrice.text( '$' + newTotalPrice.toFixed(2) );
		$shippingPrice.text( '$' + shippingCost );

	});
</script>
@endsection