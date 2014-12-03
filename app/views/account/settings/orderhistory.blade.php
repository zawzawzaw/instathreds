@section('content')
	 
  <!-- CONTENT -->
    <section class="content account">
      <div class="container">
        <h6 class="section-title"><i class="fa fa-user"></i>YOUR ACCOUNT</h6>
        <div class="row">
          <!-- right column  -->
          <div class="twelve column">
            <div class="panel detail">
              <div class="heading">
                <h6>ORDER HISTORY</h6>
              </div>

              <div class="table-responsive">
              @if($orders->count() > 0)
              <table class="table" id="orders-table">
              <thead>
                 <tr>
                    <th>Order No.</th>
                    <th>Purchase Date</th>
                    <th>Total</th>
                    <th>Status</th>
                 </tr>
              </thead>
              <tbody>
                
                    @foreach($orders as $k => $order)
                     @if($k % 2 == 0)
                     <tr class="even">
                     @else
                     <tr class="odd">
                     @endif
                        <td>{{ $order->id }}</td>
                        <td>{{ date("Y-m-d",strtotime($order->created_at)) }}</td>
                        <td>${{ $order->total }}</td>
                        <td>Pending</td>
                     </tr>
                    @endforeach
              </tbody>
              </table>
            @else
                <p>There is no orders yet!</p>
            @endif

              {{ $orders->links() }}
              </div><!-- table-responsive -->
              
              

            </div>

          
          </div>
          <!-- end of right column  -->
          
          
          
        </div>  
        
      </div>
    </section>


@stop