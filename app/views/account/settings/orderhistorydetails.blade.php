@section('content')
<!-- CONTENT -->
<section class="content">
  <div class="container">
    <h6 class="section-title"><i class="fa fa-tag"></i>ORDER NO. {{ $orders[0]->id }}</h6>
    <div class="row">
      <div class="table-responsive">
      <table class="table" id="orders-detailed-table">
      <thead>
      <tr>
        <th>Item</th>
        <th>Quantity</th>
        <th>Shirt Type</th>
        <th>Color</th>
        <th>Gender</th>
        <th>Size</th>
        <th>Image</th>
        <th>Back Image</th>
        <th>Total</th>
      </tr>
      </thead>
	      <tbody>
	      	@foreach($orders as $k => $order)
	      		@foreach($order->ordersitem as $oi)
	      			<?php $oioptions = json_decode($oi->options, true); ?>
					<tr class="odd">
			          <td>{{ $oi->id }}</td>
			          <td>{{ $oi->qty }}</td>
			          <td>{{ $oi->product_name }}</td>
			          <td>{{ $oioptions['color'] }}</td>
			          <td>{{ $oioptions['gender'] }}</td>
			          <td>{{ $oioptions['size'] }}</td>
			          <td>
			          	<img src="{{ $oioptions['image'] }}" alt="">
			          </td>
			          <td>
			          	<img src="{{ $oioptions['back_image'] }}" alt="">
			          </td>

			          <td>${{ number_format((float)$oi->price, 2, '.', '') }}</td>
			        </tr>
	      		@endforeach
	        @endforeach
	      </tbody>
      </table>
      </div>
      <table class="table table-total">
          <tbody>
              <tr>
                  <td><strong>Sub Total :</strong></td>
                  <td>${{ number_format((float)$orders[0]->sub_total, 2, '.', '') }}</td>
              </tr>
              <tr>
                  <td><strong>Shipping :</strong></td>
                  <td>${{ number_format((float)$orders[0]->shipping_cost, 2, '.', '') }}</td>
              </tr>
              <tr>
                  <td><strong>Discount :</strong></td>
                  <td>${{ number_format((float)$orders[0]->discount, 2, '.', '') }}</td>
              </tr>
              <tr>
                  <td><strong>TOTAL :</strong></td>
                  <td>${{ number_format((float)$orders[0]->total, 2, '.', '') }}</td>
              </tr>
          </tbody>
      </table>
    
    </div>  

  </div>
</section>
@stop