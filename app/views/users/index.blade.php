@section('sidebar')
 <h5 class="sidebartitle">Navigation</h5>
  <ul class="nav nav-pills nav-stacked nav-bracket">
    <li class=""><a href="{{ URL::to('admin') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
    <li><a href="{{ URL::to('admin/orders') }}"><span class="pull-right badge badge-success">12</span><i class="fa fa-pencil-square-o"></i> <span>Orders</span></a></li>
    <li><a href="{{ URL::to('admin/users') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
    <li class="active"><a href="{{ URL::to('admin/designs') }}"><span class="pull-right badge badge-success">23</span><i class="fa fa-photo"></i> <span>Designs in Store</span></a></li>
    <li><a href="{{ URL::to('admin/shirttypes') }}"><i class="fa fa-tasks"></i> <span>Shirt Types</span></a></li>
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
      <h2><i class="fa fa-home"></i> Users <span>Complete list of Users</span></h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="{{ URL::to('admin') }}">Home</a></li>
          <li class="active">Users</li>
        </ol>
      </div>
    </div>
    
    <div class="contentpanel">

      <div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="table-responsive">
            <table class="table table-hover" id="users-table">
              <thead>
                 <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th></th>
                 </tr>
              </thead>
              <tbody>
                @foreach ($users as $k => $user)
                    @if($k % 2 == 0)
                    <tr class="even">
                    @else
                    <tr class="odd">
                    @endif
                      <td>{{ HTML::image('images/admin/photos/loggeduser.png', $user->username, array('class'=>'profilepic'))  }}</td>
                      <td>{{ $user->username }}</td>
                      <td>{{ $user->username }}</td>
                      <td>{{ $user->email }}</td>
                      <td class="table-action">
                        <a href="#"><i class="fa fa-pencil"></i></a>
                      </td>
                    </tr>
                @endforeach                
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

<script>
  jQuery(document).ready(function() {

    $('#users-table').dataTable( {
      "sPaginationType": "full_numbers",
      "aoColumnDefs": [
      { 
        "bSortable": false, "aTargets": [ 0,4 ]
      }
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
  
  
  });
</script>

@stop