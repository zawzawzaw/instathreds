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
			              	<a href="{{ URL::to('product', array(Product::slug($row->product->title), $row->product->id)) }}" class="product-image">
				              	{{ HTML::image('images/products/'.$row->product->thumbnail_image, 'product image', array('style' => 'width:150px;')) }}
			              	</a>
	              		</td>
		              	<td><a href="{{ URL::to('product', array(Product::slug($row->product->title), $row->product->id)) }}">{{ $row->product->title }}</a></td>
		              <td>{{ $row->product->description }}</td>
		              <td>${{ $row->product->price }}</td>
		              <td>
		              	<div class="update-cart-input">
						    <input type="number" step="1" min="1" name="quantity" value="{{ $row->qty }}" title="Qty" class="input-text qty text" size="4">
						    {{ Form::hidden('rowId', $row->rowid, array('id' => 'rowId')) }}
					    </div>
						<!-- <input type="hidden" name="id" value="{{ $row->id }}"> -->
		              	<!-- <input type="number" step="1" min="1" name="quantity" value="{{ $row->qty }}" title="Qty" class="input-text qty text" size="4"> -->
		              </td>
		              <td><strong>${{ $row->subtotal }}</strong></td>
		            </tr>            
	            @endforeach
            @else
				<tr><td>Your cart is empty. <a href="{{ route('store.index') }}">Click here</a> to start shopping.</td></tr>
            @endif
          </tbody>
        </table>
        
        <!-- total -->
        @if(Cart::count() > 0)
        <div class="total-panel">
          <div class="coupon">
            <h6>Enter your gift, coupon or store code</h6>
            <input type="text" class="text coupon-input" placeholder="ENTER CODE">
            <button class="btn btn-primary">APPLY</button>
          </div>
          <div class="total">
            <table>
              <tbody>
                <tr>
                  <td>
                    <p>Subtotal:</p>    
                  </td>
                  <td>
                    <p>${{ Cart::total() }}</p>    
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
                  <td>${{ Cart::total() }}</td>  
                </tr>
              </tfoot>
              </tr>  
            </table>  
          </div>  
        </div>

        <!-- end of total -->

        <div class="controls">
          <a href="javascript:void(0);" class="update-cart btn btn-primary">UPDATE CART</a>
          <a href="javascript:void(0);" class="btn btn-primary">CHECKOUT</a>
        </div> 
        @endif        
         
      </div>
    </section>
    <!-- END OF CART SECTION-->

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
		});
		
	</script>
@stop