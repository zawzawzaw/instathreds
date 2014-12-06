@section('sidebar')
 <h5 class="sidebartitle">Navigation</h5>
  <ul class="nav nav-pills nav-stacked nav-bracket">
    <li class=""><a href="{{ URL::to('admin') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
    <li><a href="{{ URL::to('admin/orders') }}"><span class="pull-right badge badge-success"></span><i class="fa fa-pencil-square-o"></i> <span>Orders</span></a></li>
    <li><a href="{{ URL::to('admin/users') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
    <li><a href="{{ URL::to('admin/designs') }}"><span class="pull-right badge badge-success"></span><i class="fa fa-photo"></i> <span>Designs in Store</span></a></li>
    <li><a href="{{ URL::to('admin/shirttypes') }}"><i class="fa fa-tasks"></i> <span>Shirt Types</span></a></li>
    <li class="active"><a href="{{ URL::to('admin/promocodes') }}"><i class="fa fa-book"></i> <span>Promo Codes</span></a></li>
    <li><a href="#"><i class="fa fa-suitcase"></i> <span>Stock Art</span></a></li>
    <li><a href="#"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>
    <li><a href="{{ URL::to('admin/sliders') }}"><i class="fa fa-sliders"></i> <span>Slider</span></a></li>
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
            <h2><i class="fa fa-home"></i> Designs in Store<span style="display:none;"></span></h2>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="{{ route('admin') }}">Home</a></li>
                    <li><a href="{{ route('admin.promocodes.index') }}">Promo Codes</a></li>
                    <li class="active">Edit Promo Code</li>
                </ol>
            </div>
        </div>
        
        <div class="contentpanel">
          {{ Form::open(array('url' => '/admin/promocodes/'.$promocode->id, 'method' => 'put', 'class' => 'form-horizontal')) }}
          <!-- <form method="POST" action="/admin/promocodes" class="form-horizontal"> -->
          <div class="row">
            <div class="col-sm-12">

              <!-- CREATE A SLIDE FORM -->
              <div class="panel panel-default">
                

                <div class="panel-heading">
                  <h4 class="panel-title">EDIT PROMO CODE</h4>
                </div>
                <div class="panel-body"> 
                    <div class="row">
                      <ul>
                          @foreach($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                      @if (Session::has('message'))
                        <div class="message alert">
                          <p>{{ Session::get('message') }}</p>
                        </div>
                      @endif
                    </div>       

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Promo Code</label>
                      <div class="col-sm-6">
                        <input type="text" name="unique_promo_code" placeholder="Enter new promo code" class="form-control" value="{{ $promocode->unique_promo_code }}" />
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Discount Type (% or Fixed)</label>
                      <div class="col-sm-6">
                        <input type="text" name="discount_type" placeholder="Enter discount type" class="form-control" value="{{ $promocode->discount_type }}" />
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Amount</label>
                      <div class="col-sm-6">
                        <input type="text" name="amount" placeholder="Enter amount" class="form-control" value="{{ $promocode->amount }}" />
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Number of Usage</label>
                      <div class="col-sm-6">
                        <input type="text" name="number_of_usage" placeholder="Enter number of usage" class="form-control" value="{{ $promocode->number_of_usage }}" />
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Expiry Date</label>
                      <div class="col-sm-6">
                        <input type="text" id="date" name="expiry_date" placeholder="Enter expiry date" class="form-control" value="{{ date('d m Y',strtotime($promocode->expiry_date)) }}" />
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Usage Limit</label>
                      <div class="col-sm-6">
                        <input type="text" name="usage_limit" placeholder="Enter usage limit" class="form-control"  value="{{ $promocode->usage_limit }}" />
                      </div>
                    </div>                
                  
                </div><!-- panel-body -->

                <div class="panel-footer">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            {{ Form::token() }}
                            <input type="submit" class="btn btn-primary" />&nbsp;
                            <button class="btn btn-default">Cancel</button>
                        </div>
                    </div>
                </div><!-- panel-footer -->
                
              </div><!-- panel -->

            </div>
          </div>
          {{ Form::close() }}


          
          
          
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
{{ HTML::script('js/admin/jquery.autogrow-textarea.js') }}
{{ HTML::script('js/admin/bootstrap-fileupload.min.js') }}
{{ HTML::script('js/admin/bootstrap-timepicker.min.js') }}
{{ HTML::script('js/admin/jquery.maskedinput.min.js') }}
{{ HTML::script('js/admin/jquery.tagsinput.min.js') }}
{{ HTML::script('js/admin/jquery.mousewheel.js') }}
{{ HTML::script('js/admin/chosen.jquery.min.js') }}
{{ HTML::script('js/admin/dropzone.min.js') }}
{{ HTML::script('js/admin/colorpicker.js') }}
{{ HTML::script('js/admin/jquery.uploadifive.min.js') }}
{{ HTML::script('js/admin/custom.js') }}

<script>
jQuery(document).ready(function(){

    jQuery('.category-add-link').click(function(e){
      e.preventDefault();
      jQuery(".category-add").show();

    });

    // Chosen Select
    jQuery(".chosen-select").chosen({'width':'100%','white-space':'nowrap'});

    // Tags Input
    jQuery('#tags').tagsInput({width:'auto'});

    // Textarea Autogrow
    jQuery('#autoResizeTA').autogrow();

    // Color Picker
    if(jQuery('#colorpicker').length > 0) {
    jQuery('#colorSelector').ColorPicker({
      onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
        return false;
      },
      onHide: function (colpkr) {
        jQuery(colpkr).fadeOut(500);
        return false;
      },
      onChange: function (hsb, hex, rgb) {
        jQuery('#colorSelector span').css('backgroundColor', '#' + hex);
        jQuery('#colorpicker').val('#'+hex);
      }
    });
    }

    // Color Picker Flat Mode
    jQuery('#colorpickerholder').ColorPicker({
    flat: true,
    onChange: function (hsb, hex, rgb) {
      jQuery('#colorpicker3').val('#'+hex);
    }
    });

    // Date Picker
    jQuery('#datepicker').datepicker();

    jQuery('#datepicker-inline').datepicker();

    jQuery('#datepicker-multiple').datepicker({
    numberOfMonths: 3,
    showButtonPanel: true
    });

    // Spinner
    var spinner = jQuery('#spinner').spinner();
    spinner.spinner('value', 0);

    // Input Masks
    jQuery("#date").mask("99/99/9999");
    jQuery("#phone").mask("(999) 999-9999");
    jQuery("#ssn").mask("999-99-9999");

    // Time Picker
    jQuery('#timepicker').timepicker({defaultTIme: false});
    jQuery('#timepicker2').timepicker({showMeridian: false});
    jQuery('#timepicker3').timepicker({minuteStep: 15});

  
});
</script>
@stop