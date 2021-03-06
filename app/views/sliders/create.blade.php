@section('sidebar')
 <h5 class="sidebartitle">Navigation</h5>
  <ul class="nav nav-pills nav-stacked nav-bracket">
    <li class=""><a href="{{ URL::to('admin') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
    <li><a href="{{ URL::to('admin/orders') }}"><span class="pull-right badge badge-success"></span><i class="fa fa-pencil-square-o"></i> <span>Orders</span></a></li>
    <li><a href="{{ URL::to('admin/users') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
    <li><a href="{{ URL::to('admin/designs') }}"><span class="pull-right badge badge-success"></span><i class="fa fa-photo"></i> <span>Designs in Store</span></a></li>
    <li><a href="{{ URL::to('admin/shirttypes') }}"><i class="fa fa-tasks"></i> <span>Shirt Types</span></a></li>
    <li><a href="{{ URL::to('admin/promocodes') }}"><i class="fa fa-book"></i> <span>Promo Codes</span></a></li>
    <li><a href="#"><i class="fa fa-suitcase"></i> <span>Stock Art</span></a></li>
    <li><a href="#"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>
    <li class="active"><a href="{{ URL::to('admin/sliders') }}"><i class="fa fa-sliders"></i> <span>Slider</span></a></li>
    <li><a href="{{ URL::to('admin/promos') }}"><i class="fa fa-usd"></i> <span>Promotions</span></a></li>
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
      <h2><i class="fa fa-home"></i> Slider <span style="display:none;"></span></h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li><a href="{{ route('admin') }}">Home</a></li>
            <li><a href="{{ route('admin.sliders.index') }}">Promo Codes</a></li>
            <li class="active">Add Slider</li>
        </ol>
      </div>
    </div>
    
    <div class="contentpanel">

        <div class="row">
            <div class="col-sm-12 col-md-12">
              
              <!-- CREATE A SLIDE FORM -->
              <div class="panel panel-default">
                <form method="POST" action="/admin/sliders" class="form-horizontal">

                    <div class="panel-heading">
                      <h4 class="panel-title">CREATE A SLIDE</h4>
                      <p>This slide is located at the homepage.</p>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                          <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="form-group">
                          <label class="col-sm-3 control-label">File Upload</label>
                          <div class="col-sm-6">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                              <div class="input-append">
                                <div class="uneditable-input">
                                  <i class="glyphicon glyphicon-file fileupload-exists"></i>
                                  <span class="fileupload-preview"></span>
                                </div>
                                <span class="btn btn-default btn-file">
                                  <span class="fileupload-new">Select file</span>
                                  <span class="fileupload-exists">Change</span>
                                  <input id="file_upload" name="slider_image" type="file" />
                                  <input type="hidden" name="image" />
                                </span>
                                <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-sm-3 control-label">Link</label>
                          <div class="col-sm-6">
                            <input type="text" name="link_1" placeholder="Link for the slide" class="form-control" />
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

                </form>

              </div><!-- panel -->        
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

    // File Upload
    var $uploadBtn = $('#file_upload');
    var $uploadResponse = $('.fileupload-preview');

    $uploadBtn.uploadifive({
        'auto'      : true,
        'fileType'     : 'image/*',
        'fileSizeLimit' : '10MB',
        'buttonText'   : '',
        'formData'         : {'type' : 'slider'},
        'uploadScript' : "{{ route('admin.uploadfiles') }}",
        'onUploadComplete' : function(file, data) {
            console.log(data);

            var data = data.split("||").concat();

            var shortText = jQuery.trim(data[1]).substring(0, 20).trim(this) + "...";
            console.log(data[0])
            console.log(data[1])
            console.log(shortText)

            $(':hidden[name=image]').val(data[0]);

            $uploadResponse.text(shortText);

        }
    });
  
});
</script>
@stop