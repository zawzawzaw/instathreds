@section('content')
<!-- BANNER/SLIDER -->
    <section class="slider">
      <div class="container">
        <div class="offers-bar">
          <h6><span>NEW FEATURED DESIGNS!</span> SHOP NOW</h6>  
        </div>
      </div>
    </section>
    <!-- END BANNER/SLIDER -->

    @if(Cart::count() <= 0)
    <section class="content cart">
      <div class="container">
        <h6 class="section-title">YOUR CART</h6>
        
        <div class="panel cart-empty">
          <h6>UH-OH, YOUR CART IS EMPTY</h6>
          <p>The Choice is Yours and Yours Alone</p>
          <a href="{{ route('shirtbuilder.index') }}" class="btn btn-primary">MAKE YOUR OWN</a> 
          <span class="or">OR</span> 
          <a href="{{ route('store.featured') }}" class="btn btn-primary">CHOOSE A DESIGN</a>
        </div>       
         
      </div>
    </section>
    @else

    <!-- CONTENT -->
    <section class="content cart">
      <div class="container">
        <h6 class="section-title">GOODIES IN YOUR CART</h6>
        <table class="table-cart">
		  @if(Cart::count() > 0)
          <thead>
            <tr class="heading">
              <th>&nbsp;</th>
              <th>&nbsp;</th>
              <th>Title</th>
              <th>Description</th>
              <th>Price</th>
              <th>Qty</th>
              <th>Total</th>
            </tr>
          </thead>
          @endif
          <tbody>
          	@if(Cart::count() > 0)
	          	@foreach($cart as $row)
		            <tr>
		           	  
              			<td><a href="javascript:void(0);" class="button-remove"><i class="fa fa-close">X</i></a></td>
		              	<td>
			              	<a href="{{ URL::to('product', array(Product::slug($row->name), $row->id)) }}" class="product-image">
                        @if($row->options->image!='')
                          <img src="{{ $row->options->image }}" alt="product image" style="width:150px;" alt="">
                        @else
                          <img src="{{ $row->options->back_image }}" alt="product image" style="width:150px;" alt="">
                        @endif
			              	</a>
	              		</td>
		              	<td><a href="{{ URL::to('product', array(Product::slug($row->name), $row->id)) }}">{{ $row->name }}</a></td>
		              <td>{{ $row->options->description }}</td>
		              <td>${{ $row->price }}</td>
		              <td>
		              	<div class="update-cart-input">
						    <input type="number" step="1" min="1" name="quantity" value="{{ $row->qty }}" title="Qty" class="input-text qty text" size="4">
						    {{ Form::hidden('rowId', $row->rowid, array('id' => 'rowId')) }}
					    </div>
						<!-- <input type="hidden" name="id" value="{{ $row->id }}"> -->
		              	<!-- <input type="number" step="1" min="1" name="quantity" value="{{ $row->qty }}" title="Qty" class="input-text qty text" size="4"> -->
		              </td>
		              <td><strong>${{ number_format((float)$row->subtotal, 2, '.', '') }}</strong></td>
		            </tr>            
	            @endforeach
            @endif
          </tbody>
        </table>
        
        <!-- total -->
        @if(Cart::count() > 0)
        <div class="total-panel">
          <div class="coupon">
            <h6>Enter your gift, coupon or store code</h6>
            {{ Form::open(array('url'=>'checkout', 'class'=>'checkout-form', 'style'=>'display:inline;')) }}
              <input type="text" name="promo_code" class="text promo_code" placeholder="ENTER CODE">
            {{ Form::close() }}
              <button class="btn btn-primary apply-promo">APPLY</button>
            
          </div>
          <div class="total">
            <table>
              <tbody>
                <tr>
                  <td>
                    <p>Subtotal:</p>    
                  </td>
                  <td>
                    <p>${{ number_format((float)Cart::total(), 2, '.', '') }}</p>    
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>Shipping:</p>    
                  </td>
                  <td>
                    <p>$0.00</p>    
                  </td>
                </tr>  
              </tbody>
              <tfoot>
                <tr>
                  <td>Total:</td>
                  <td class="total-amount">${{ number_format((float)Cart::total(), 2, '.', '') }}</td>  
                </tr>
              </tfoot>
              </tr>  
            </table>  
          </div>  
        </div>

        <!-- end of total -->

        <div class="controls">
          <a href="javascript:void(0);" class="update-cart btn btn-primary">UPDATE CART</a>
          <a href="javascript:void(0);" class="checkout-cart btn btn-primary">CHECKOUT</a>
        </div> 
        @endif        
         
      </div>
    </section>
    <!-- END OF CART SECTION-->

    @endif

    {{ HTML::script('js/admin/jquery-1.10.2.min.js') }}
	<script>
		$(document).ready(function(e){
			var makeRequest = function(Data, URL, Method) {

		    	var request = $.ajax({
				    url: URL,
				    type: Method,
				    data: Data,
		        	dataType: "JSON",
		        	cache: false,
				    success: function(response) {
				        // if success remove current item
				        // console.log(response);
				    },
		            error: function( error ){
		                // Log any error.
		                console.log( "ERROR:", error );
		            }
				});

				return request;
			};

      $('.checkout-cart').on('click', function(e){
        $('.checkout-form').submit();
      });

			var request;
			$('.update-cart').on('click', function(e){
				e.preventDefault();

				// abort any pending request
				if (request) {
				  request.abort();
				}

				var updateCartJSON = {
					'data' : []
				};

				$('.update-cart-input').each(function(index, value){

					updateCartJSON.data.push({
						'rowId' : $(this).children('#rowId').val(),
            'qty' : $(this).children('.qty').val()
					});

				});

				request = makeRequest(updateCartJSON, "/cart/1", "PUT");

		        request.done(function(){
		        	console.log(request);
	        		window.location.reload();
		        });
			});


			$('.button-remove').on('click', function(e) {
				var rowId = $(this).parent().parent('tr').find('.update-cart-input').children('#rowId').val();

				request = makeRequest('', "/cart/"+rowId, "DELETE");

		        request.done(function(){
		        	console.log(request);
	        		window.location.reload();
		        });

			});

      $('.promo_code').keypress(function(e){
          var key = e.which;
          if(key == 13)
          {
              $('.apply-promo').trigger('click');
              return false;
          }
      });

      $('.apply-promo').on('click', function(e){
        var promoCode = $('.promo_code').val();
        var checkpromoJSON = {};

        checkpromoJSON.promo_code = promoCode;

        request = makeRequest(checkpromoJSON, "/checkout/checkpromocode", "POST");

        request.done(function(){
          var result = jQuery.parseJSON(request.responseText);

          var cartTotal = '{{ Cart::total() }}';

          if(result.discount_type=="%") {
            var ActualDiscountValue = parseFloat(cartTotal) * (result.amount/100);

            if($('.actual-discount').length === 0) {
              $('.total table').children('tbody').append('<tr><td><p>Discount:</p></td><td><p class="actual-discount">- $'+ActualDiscountValue.toFixed(2)+'</p></td></tr>');
            }else {
              $('.actual-discount').text('- $'+ActualDiscountValue.toFixed(2));
            }

            var totalPrice = parseFloat(cartTotal) - parseFloat(ActualDiscountValue);
            
            $('.total table').find('.total-amount').text('$'+ totalPrice.toFixed(2));

          } else {
            var ActualDiscountValue = parseFloat(result.amount);

            if($('.actual-discount').length === 0) {
              $('.total table').children('tbody').append('<tr><td><p>Discount:</p></td><td><p class="actual-discount">- $'+ActualDiscountValue+'</p></td></tr>');
            }else {
              $('.actual-discount').text('- $'+ActualDiscountValue);
            }

            var totalPrice = parseFloat(cartTotal) - parseFloat(ActualDiscountValue);

            $('.total table').find('.total-amount').text('$'+ totalPrice.toFixed(2));

          }

          if($('#msg').length === 0) {
            $('.coupon').append('<p id="msg">Promo code has successfully applied</p>').css('color','black').fadeIn('slow');
          }else {
            $('#msg').text('Promo code has successfully applied').css('color','black').fadeIn('slow');
          }

          setTimeout(function() {
            $('#msg').fadeOut('slow');
          }, 5000 );         

        });

        request.error(function(){
          var result = jQuery.parseJSON(request.responseText);

          if($('.actual-discount').length !== 0) {
            $('.total table').find('tbody').children('tr').last().remove();
          }
          $('.total table').find('.total-amount').text('${{ number_format((float)Cart::total(), 2, '.', '') }}');

          if($('#msg').length === 0) {
            $('.coupon').append('<p id="msg" style="color: red;">'+result.message+'</p>').fadeIn('slow');
          }else {
            $('#msg').text(result.message).css('color','red').fadeIn('slow');
          }

          setTimeout(function() {
           $('#msg').fadeOut('slow');
          }, 5000 );
        })

      });
		});
		
	</script>
@stop