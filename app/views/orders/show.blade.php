@section('sidebar')
 <h5 class="sidebartitle">Navigation</h5>
  <ul class="nav nav-pills nav-stacked nav-bracket">
    <li class=""><a href="{{ URL::to('admin') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
    <li class="active"><a href="{{ URL::to('admin/orders') }}"><span class="pull-right badge badge-success"></span><i class="fa fa-pencil-square-o"></i> <span>Orders</span></a></li>
    <li><a href="{{ URL::to('admin/users') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
    <li><a href="{{ URL::to('admin/designs') }}"><span class="pull-right badge badge-success"></span><i class="fa fa-photo"></i> <span>Designs in Store</span></a></li>
    <li><a href="{{ URL::to('admin/shirttypes') }}"><i class="fa fa-tasks"></i> <span>Shirt Types</span></a></li>
    <li><a href="{{ URL::to('admin/promocodes') }}"><i class="fa fa-book"></i> <span>Promo Codes</span></a></li>
    <li><a href="#"><i class="fa fa-suitcase"></i> <span>Stock Art</span></a></li>
    <li><a href="#"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>
    <li><a href="#"><i class="fa fa-sliders"></i> <span>Slider</span></a></li>
    <li><a href="#"><i class="fa fa-cogs"></i> <span>Settings</span></a></li>
  </ul>
@stop

@section('content')
<div class="mainpanel">
    
    <div class="headerbar">
      
      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
      <form class="searchform" action="index.html" method="post" style="display:none;">
        <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
      </form>
      
      <div class="header-right">
      <ul class="headermenu">
        <li>
          <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
              {{ HTML::image('images/admin/photos/loggeduser.png', '') }}
              {{ $username }}
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
              <li><a href="settings.html"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
              <li><a href="{{ route('login.destroy') }}"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div><!-- header-right -->
      
    </div><!-- headerbar -->
    
    <div class="pageheader">
      <h2><i class="fa fa-home"></i> Order Details <span style="display:none;"></span></h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="{{ URL::to('admin') }}">Home</a></li>
          <li><a href="{{ URL::to('admin.orders') }}">Orders</a></li>
          <li class="active">Order Details</li>
        </ol>
      </div>
    </div>

    <div class="contentpanel">

      <div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <h5 class="subtitle mb5">Order No. {{ $order[0]->id }}</h5>
              <p class="mb20">Customer name : {{ $order[0]->contact_first_name. ' '. $order[0]->contact_last_name; }}</p>
              <p class="mb20">Customer email : {{ $order[0]->contact_email }}</p>
              <p class="mb20">Customer phone : {{ $order[0]->contact_phone }}</p>
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
                      @foreach($order[0]->ordersitem as $eachordersitem)
                        <?php $eachordersitemoptions = json_decode($eachordersitem->options, true); ?>
                        <tr class="odd">
                          <td>{{ $eachordersitem->id }}</td>
                          <td>{{ $eachordersitem->qty }}</td>
                          <td>{{ $eachordersitemoptions['shirt_type'] }}</td>
                          <td>{{ $eachordersitemoptions['color'] }}</td>
                          <td>{{ $eachordersitemoptions['gender'] }}</td>
                          <td>{{ $eachordersitemoptions['size'] }}</td>
                          <td><a href="{{ $eachordersitemoptions['image'] }}" target="_blank"><img src="{{ $eachordersitemoptions['image'] }}" width="75"></a></td>
                          <td><a href="{{ $eachordersitemoptions['back_image'] }}" target="_blank"><img src="{{ $eachordersitemoptions['back_image'] }}" width="75"></a></td>
                          <td>{{ $eachordersitem['price'] }}</td>
                        </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>

              <table class="table table-total">
                  <tbody>
                      <tr>
                          <td><strong>Sub Total :</strong></td>
                          <td>${{ $order[0]->sub_total }}</td>
                      </tr>
                      <tr>
                          <td><strong>Shipping :</strong></td>
                          <td>${{ $order[0]->shipping_cost }}</td>
                      </tr>
                      <tr>
                          <td><strong>TOTAL :</strong></td>
                          <td>${{ $order[0]->total }}</td>
                      </tr>
                  </tbody>
              </table>

              <div class="pull-right">
                <div class="btn-group">
                  <p class="msg" style="margin-right: 15px;margin-top: 12px;color: red;"></p>
                </div>
                <div class="btn-group mr5 orderstatus-section">
                    <button data-toggle="dropdown" id="order-status-btn" class="btn btn-primary dropdown-toggle" type="button">
                        {{ $order[0]->status }} <span class="caret"></span>
                    </button>
                    <ul role="menu" class="dropdown-menu status-dropdown">
                      <li><a class="order-status" href="#">Pending</a></li>
                      <li><a class="order-status" href="#">Complete</a></li>
                      <li><a class="order-status" href="#">Failed</a></li>
                      <li><a class="order-status" href="#">On-hold</a></li>
                      <li><a class="order-status" href="#">Refunded</a></li>
                      <li><a class="order-status" href="#">Cancelled</a></li>
                    </ul>
                    
                </div>
                <div class="btn-group">
                  <!-- <a href=""><button class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete Order</button></a> -->
                </div>
              </div>


              </div>
              </div>

              <div class="clearfix mb30"></div>

            </div>
          </div>
        </div>
      </div>

    </div>

</div><!-- mainpanel -->

{{ HTML::script('js/admin/jquery-1.10.2.min.js') }}
{{ HTML::script('js/admin/jquery-migrate-1.2.1.min.js') }}
{{ HTML::script('js/admin/jquery-ui-1.10.3.min.js') }}
{{ HTML::script('js/admin/bootstrap.min.js') }}
{{ HTML::script('js/admin/modernizr.min.js') }}
{{ HTML::script('js/admin/jquery.sparkline.min.js') }}
{{ HTML::script('js/admin/toggles.min.js') }}
{{ HTML::script('js/admin/retina.min.js') }}
{{ HTML::script('js/admin/jquery.cookies.js') }}

{{ HTML::script('js/admin/flot/flot.min.js') }}
{{ HTML::script('js/admin/flot/flot.resize.min.js') }}
{{ HTML::script('js/admin/morris.min.js') }}
{{ HTML::script('js/admin/raphael-2.1.0.min.js') }}

{{ HTML::script('js/admin/jquery.datatables.min.js') }}
{{ HTML::script('js/admin/chosen.jquery.min.js') }}

{{ HTML::script('js/admin/custom.js') }}

<script>
  jQuery(document).ready(function() {

    $('#orders-table').dataTable( {
      "sPaginationType": "full_numbers",
      "aoColumnDefs": [
      { "bSortable": false, "aTargets": [ 6 ] }
      ] 
    });
    
    //jQuery('#orders-table').dataTable({
    //  "sPaginationType": "full_numbers"
    //});
    
    jQuery('#orders-table tr th:last-child').empty();
    
    
    // Chosen Select
    jQuery("select").chosen({
      'min-width': '100px',
      'white-space': 'nowrap',
      disable_search_threshold: 10
    });
    
    // Delete row in a table
    jQuery('.delete-row').click(function(){
      var c = confirm("Continue delete?");
      if(c)
        jQuery(this).closest('tr').fadeOut(function(){
          jQuery(this).remove();
        });
        
        return false;
    });
    
    // Show aciton upon row hover
    jQuery('.table-hidaction tbody tr').hover(function(){
      jQuery(this).find('.table-action-hide a').animate({opacity: 1});
    },function(){
      jQuery(this).find('.table-action-hide a').animate({opacity: 0});
    });

    var makeRequest = function(Data, URL, Method) {

        var request = $.ajax({
          url: URL,
          type: Method,
          data: Data,
            dataType: "JSON",
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
    $('.order-status').on('click', function(e){

      $('#order-status-btn').html($(this).text()+' <span class="caret"></span>');

      statusUpdateJSON = {};
      statusUpdateJSON.order_status = $(this).text();

      console.log(statusUpdateJSON);

      if (request) {
          request.abort();
      }

      request = makeRequest(statusUpdateJSON, "/admin/orders/{{ $order[0]->id }}" , "PUT");

      request.done(function(){
        var result = jQuery.parseJSON(request.responseText);

        console.log(result)
                   
        if(result) {
          // if($('.orderstatus-section').length < 1)
            $('.msg').text(result);
        }

      });  
    })

  
  
  });
</script>
@stop