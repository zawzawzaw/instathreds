<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/admin/favicon.png" type="image/png">

  <title>Instathreds CMS</title>

  {{ HTML::style('css/admin/style.default.css') }}
  {{ HTML::style('css/admin/jquery.datatables.css') }}

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  {{ HTML::script('js/admin/html5shiv.js') }}
  {{ HTML::script('js/admin/respond.min.js') }}
  <![endif]-->
</head>

<body>
    
<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>
  
  <div class="leftpanel">
    
    <div class="logopanel">
        <a href="{{ URL::to('admin') }}">{{ HTML::image('images/admin/logo-instathreds.png', 'Instathreds Logo') }}</a>
    </div><!-- logopanel -->
        
    <div class="leftpanelinner">    
        
      <!-- This is only visible to small devices -->
      <div class="visible-xs hidden-sm hidden-md hidden-lg">   
          <div class="media userlogged">
              {{ HTML::image('images/admin/photos/loggeduser.png', 'Profile Picture', array('class'=> 'media-object')) }}
              <div class="media-body">
                  <h4>Karlo Estrada</h4>
                  <span>"Life is so..."</span>
              </div>
          </div>
        
          <h5 class="sidebartitle actitle">Account</h5>
          <ul class="nav nav-pills nav-stacked nav-bracket mb30">
            <li><a href="#"><i class="fa fa-cog"></i> <span>Account Settings</span></a></li>
            <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
          </ul>
      </div>
      
      <h5 class="sidebartitle">Navigation</h5>
      <ul class="nav nav-pills nav-stacked nav-bracket">
        <li class="active"><a href="{{ URL::to('admin') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li><a href="#"><span class="pull-right badge badge-success">12</span><i class="fa fa-pencil-square-o"></i> <span>Orders</span></a></li>
        <li><a href="{{ URL::to('admin/users') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
        <li><a href="#"><span class="pull-right badge badge-success">23</span><i class="fa fa-photo"></i> <span>Designs in Store</span></a></li>
        <li><a href="#"><i class="fa fa-suitcase"></i> <span>Stock Art</span></a></li>
        <li><a href="#"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>
        <li><a href="#"><i class="fa fa-sliders"></i> <span>Slider</span></a></li>
        <li><a href="#"><i class="fa fa-cogs"></i> <span>Settings</span></a></li>
      </ul>
      
      
      
    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->
  
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

      @yield('content')
      
    </div><!-- contentpanel -->
    
  </div><!-- mainpanel -->
  
  
  
  
</section>

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

</body>
</html>
