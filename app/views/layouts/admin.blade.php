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
  {{ HTML::style('css/admin/custom.css') }}

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

  @yield('content')
  
</section>

</body>
</html>
