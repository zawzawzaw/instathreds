@section('content')
<div class="mainpanel">
    
    <div class="headerbar">
      
      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
      <form class="searchform" action="{{ URL::to('admin') }}" method="post" style="display:none;">
        <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
      </form>
      
      <div class="header-right">
        <ul class="headermenu">
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                {{ HTML::image('images/admin/photos/loggeduser.png', '') }}
                {{ Auth::user()->username; }}
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                <li><a href="{{ route('login.destroy') }}"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div><!-- header-right -->
      
    </div><!-- headerbar -->
    
    <div class="pageheader">
      <h2><i class="fa fa-home"></i> Dashboard <span style="display:none;">Subtitle goes here...</span></h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="{{ URL::to('admin') }}">Instathreds</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </div>
    
    <div class="contentpanel">
		<div class="row">
			<div class="col-sm-12 col-md-12">
			<h3 class="mb5">Latest Orders</h3>
			  <p class="mb20">Summary of your current orders.</p>
			  <div class="table-responsive">
			    <table class="table table-hover">
			      <thead>
			         <tr>
			            <th>Order No.</th>
			            <th>Date</th>
			            <th>Status</th>
			            <th>Username</th>
			            <th>Total</th>
			            <th>Shipping</th>
			            <th></th>
			         </tr>
			      </thead>
			      <tbody>
			         <tr class="odd">
			            <td>617</td>
			            <td>12/01/2014</td>
			            <td>Pending</td>
			            <td>oklah</td>
			            <td>$31.50</td>
			            <td>#401 7 Brighton Rd. St. Kilda VIC 3121</td>
			            <td class="table-action">
			              <a href="orders-detail.html"><i class="fa fa-pencil"></i></a>
			            </td>
			         </tr>
			         <tr class="even">
			            <td>618</td>
			            <td>11/21/2014</td>
			            <td>Completed</td>
			            <td>drummerboy</td>
			            <td>$22.50</td>
			            <td>#401 7 Brighton Rd. St. Kilda VIC 3121</td>
			            <td class="table-action">
			              <a href="orders-detail.html"><i class="fa fa-pencil"></i></a>
			            </td>
			         </tr>
			         <tr class="odd">
			            <td>619</td>
			            <td>12/11/2014</td>
			            <td>Completed</td>
			            <td>rockabilly</td>
			            <td>$90.50</td>
			            <td>#401 7 Brighton Rd. St. Kilda VIC 3121</td>
			            <td class="table-action">
			              <a href="orders-detail.html"><i class="fa fa-pencil"></i></a>
			            </td>
			         </tr>
			         <tr class="even">
			            <td>620</td>
			            <td>12/19/2014</td>
			            <td>Pending</td>
			            <td>thedentist</td>
			            <td>$34.50</td>
			            <td>#401 7 Brighton Rd. St. Kilda VIC 3121</td>
			            <td class="table-action">
			              <a href="orders-detail.html"><i class="fa fa-pencil"></i></a>
			            </td>
			         </tr>
			         <tr class="odd">
			            <td>621</td>
			            <td>12/22/2014</td>
			            <td>Pending</td>
			            <td>johnnyhardcore</td>
			            <td>$121.50</td>
			            <td>#401 7 Brighton Rd. St. Kilda VIC 3121</td>
			            <td class="table-action">
			              <a href="orders-detail.html"><i class="fa fa-pencil"></i></a>
			            </td>
			         </tr>
			         <tr class="odd">
			            <td>622</td>
			            <td>12/23/2014</td>
			            <td>Completed</td>
			            <td>federalman</td>
			            <td>$331.50</td>
			            <td>#401 7 Brighton Rd. St. Kilda VIC 3121</td>
			            <td class="table-action">
			              <a href="orders-detail.html"><i class="fa fa-pencil"></i></a>
			            </td>
			         </tr>
			         <tr class="even">
			            <td>623</td>
			            <td>12/29/2014</td>
			            <td>Pending</td>
			            <td>rastemboy</td>
			            <td>$431.50</td>
			            <td>#401 7 Brighton Rd. St. Kilda VIC 3121</td>
			            <td class="table-action">
			              <a href="orders-detail.html"><i class="fa fa-pencil"></i></a>
			            </td>
			         </tr>
			         <tr class="odd">
			            <td>624</td>
			            <td>12/30/2014</td>
			            <td>Pending</td>
			            <td>johnsnow</td>
			            <td>$331.50</td>
			            <td>#401 7 Brighton Rd. St. Kilda VIC 3121</td>
			            <td class="table-action">
			              <a href="orders-detail.html"><i class="fa fa-pencil"></i></a>
			            </td>
			         </tr>
			         <tr class="even">
			            <td>625</td>
			            <td>12/08/2014</td>
			            <td>Pending</td>
			            <td>eyeballman</td>
			            <td>$231.50</td>
			            <td>#401 7 Brighton Rd. St. Kilda VIC 3121</td>
			            <td class="table-action">
			              <a href="orders-detail.html"><i class="fa fa-pencil"></i></a>
			            </td>
			         </tr>
			         <tr class="odd">
			            <td>629</td>
			            <td>12/06/2014</td>
			            <td>Completed</td>
			            <td>gotzegoal</td>
			            <td>$131.50</td>
			            <td>#401 7 Brighton Rd. St. Kilda VIC 3121</td>
			            <td class="table-action">
			              <a href="orders-detail.html"><i class="fa fa-pencil"></i></a>
			            </td>
			         </tr>

			      </tbody>
			   </table>
			  </div><!-- table-responsive -->
			  <div class="clearfix mb30"></div>
			</div>    
		</div>
	</div><!-- contentpanel -->

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
{{ HTML::script('js/admin/dashboard.js') }}

<script>
  jQuery(document).ready(function() {
    
    jQuery('#orders-table').dataTable({
      "sPaginationType": "full_numbers"
    });
    
    
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
  
  
  });
</script>

@stop
