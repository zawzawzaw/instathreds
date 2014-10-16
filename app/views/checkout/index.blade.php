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
            <input type="radio" name="redemption_type" value="collection" style="display: inline-block;margin-left: 1px;"><h6 style="display: inline-block;width: 262px;padding-left: 10px;">I wish to collect my order from</h6>
            
            <div class="collect">
            	<a href="" class="store-loc storeloc-link"><i class="fa fa-info-circle"></i>Store Location</a>
	            <div class="choose-store" style="margin-bottom: 20px;">
	              <div class="left">
	                <input type="checkbox" name="store_location" id="store-robina" class="css-checkbox lrg" checked="checked" value="Robina Store" />
	                <label for="store-robina" class="css-label lrg">Robina Store</label>
	              </div>
	              <div class="right">
	                <input type="checkbox" name="store_location" id="store-carindale" class="css-checkbox lrg" value="Carindale Store" />
	                <label for="store-carindale" class="css-label lrg">Carindale Store</label>
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
	                <input type="checkbox" name="shipping_method" id="shipmethod-standard" class="css-checkbox lrg" checked="checked"/>
	                <label for="shipping_method" class="css-label lrg">Standard (5-15 Business Days)</label>
	              </div>
	              <div class="form-group">
	                <input type="checkbox" name="shipping_method" id="shipmethod-express" class="css-checkbox lrg" />
	                <label for="shipping_method" class="css-label lrg">Express (3-7 Business Days)</label>
	              </div>
	            </div>

            </div>
          </div>
          <!-- end of right column -->

          <div class="separator-line"></div>

          <div style="text-align:center;margin-bottom:20px;">
            <!-- <a href="" class="btn btn-primary continuepayment" >CONTINUE PAYMENT</a> -->
            {{ Form::submit('CONTINUE PAYMENT', array('class'=>'btn btn-primary continuepayment'))}}

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
        {{ Form::close() }}

        <div class="panel payment">
          <div class="heading">
            <h6>PAYMENT</h6>
          </div>
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
                      <p class="shipping">$0.00</p>    
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
		}
	});

	$('#country-select').on('change', function(e){
		if( $(this).val() == "Australia" ) var shippingCost = 6;
		else var shippingCost = 20;

		newTotalPrice = parseFloat('{{ Cart::total() }}') + shippingCost;

		$totalPrice.text( '$' + newTotalPrice.toFixed(2) );

	});
</script>
@endsection