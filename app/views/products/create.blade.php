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
                    <li><a href="{{ route('admin.designs.index') }}">Designs in Store</a></li>
                    <li class="active">Upload Design</li>
                </ol>
            </div>
        </div>
        
        <div class="contentpanel">
          <form method="POST" action="/admin/designs" class="form-horizontal">
          <div class="row">
            <div class="col-sm-9">

              <!-- CREATE A SLIDE FORM -->
              <div class="panel panel-default">
                

                <div class="panel-heading">
                  <h4 class="panel-title">ADD A DESIGN</h4>
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
                      <label class="col-sm-3 control-label">Upload Design (PNG)</label>
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
                              <input id="file_upload" name="product_image" type="file" />
                              <input type="hidden" name="image" />
                            </span>
                            <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Upload Design Thumbnail</label>
                      <div class="col-sm-6">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                          <div class="input-append">
                            <div class="uneditable-input">
                              <i class="glyphicon glyphicon-file fileupload-exists"></i>
                              <span class="fileupload-preview-2"></span>
                            </div>
                            <span class="btn btn-default btn-file">
                              <span class="fileupload-new">Select file</span>
                              <span class="fileupload-exists">Change</span>
                              <input id="file_upload_2" name="product_image_2" type="file" />
                              <input type="hidden" name="thumbnail_image" />
                            </span>
                            <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Title</label>
                      <div class="col-sm-6">
                        <input type="text" name="title" placeholder="Enter your design title" class="form-control" />
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Description</label>
                      <div class="col-sm-6">
                        <input type="text" name="description" placeholder="Enter your design description" class="form-control" />
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Designer Name</label>
                      <div class="col-sm-6">
                        <input type="text" name="designer_name" placeholder="Enter designer name" class="form-control" />
                      </div>
                    </div>

                    <!-- <div class="form-group">
                      <label class="col-sm-3 control-label">Price</label>
                      <div class="col-sm-6">
                        <input type="text" name="price" placeholder="Enter your product price" class="form-control" />
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Stock</label>
                      <div class="col-sm-6">
                        <input type="text" name="stock" placeholder="Enter your product stock" class="form-control" />
                      </div>
                    </div> -->
                    

                  
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
            <div class="col-sm-3">
              
              <div class="fm-sidebar">
                
                <h5 class="subtitle">Categories <!-- <a href="" class="category-add-link pull-right">+ Add Category</a> --></h5>
                <div class="form-group category-add">
                    <input type="text" style="margin-bottom:5px;" class="form-control input-sm" placeholder="New Category">
                    <button class="btn btn-primary btn-sm pull-right">Add</button>
                </div>
                <div class="clearfix mb10"></div>

                <ul class="folder-list">
                    @foreach($categories as $category)
                      <li>
                          <div class="ckbox ckbox-default">
                              <input type="checkbox" name="category_id" class="choose-category" value="{{ $category->id }}">
                              <label class="choose-category" for="check1">{{ $category->name }}</label>
                          </div>
                      </li>
                    @endforeach
                    
                </ul>  
              
              </div>          
            </div>
          </div>
          </form>  


          
          
          
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

    // File Upload
    var $uploadBtn = $('#file_upload');
    var $uploadResponse = $('.fileupload-preview')

    $uploadBtn.uploadifive({
        'auto'      : true,
        'fileType'     : 'image/*',
        'fileSizeLimit' : '10MB',
        'buttonText'   : '',
        'uploadScript' : "{{ route('admin.uploadfiles') }}",
        'onError'      : function(errorType) {
            // $uploadBtn.uploadifive('cancel', $('.uploadifive-queue-item').first().data('file'));
            // $uploadResponse.text(errorType).css('color','red');
        },
        'onUploadComplete' : function(file, data) {
            console.log(data);

            var data = data.split("||").concat();

            // if(data == 'small'){
            //     $uploadResponse.text('');
            //     $uploadResponse.text('Image is too small').css('color','red');

            //     $uploadBtn.uploadifive('cancel', $('.uploadifive-queue-item').first().data('file'));
            // }
            // else if(data == 'large'){
            //     $uploadResponse.text('');
            //     $uploadResponse.text('Image is too big').css('color','red');

            //     $uploadBtn.uploadifive('cancel', $('.uploadifive-queue-item').first().data('file'));
            // }else {

            // }

            // $('#uploaded_file-error').hide();

            var shortText = jQuery.trim(data[1]).substring(0, 20).trim(this) + "...";
            console.log(data[0])
            console.log(data[1])
            console.log(shortText)

            $(':hidden[name=image]').val(data[0]);

            $uploadResponse.text(shortText);

        }
    });

    // File Upload
    var $uploadBtn2 = $('#file_upload_2');
    var $uploadResponse2 = $('.fileupload-preview-2')

    $uploadBtn2.uploadifive({
        'auto'      : true,
        'fileType'     : 'image/*',
        'fileSizeLimit' : '10MB',
        'buttonText'   : '',
        'formData'         : {'type' : 'thumbnail'},
        'uploadScript' : "{{ route('admin.uploadfiles') }}",
        'onError'      : function(errorType) {
            // $uploadBtn.uploadifive('cancel', $('.uploadifive-queue-item').first().data('file'));
            // $uploadResponse.text(errorType).css('color','red');
        },
        'onUploadComplete' : function(file, data) {
            console.log(data);

            var data = data.split("||").concat();

            // if(data == 'small'){
            //     $uploadResponse.text('');
            //     $uploadResponse.text('Image is too small').css('color','red');

            //     $uploadBtn.uploadifive('cancel', $('.uploadifive-queue-item').first().data('file'));
            // }
            // else if(data == 'large'){
            //     $uploadResponse.text('');
            //     $uploadResponse.text('Image is too big').css('color','red');

            //     $uploadBtn.uploadifive('cancel', $('.uploadifive-queue-item').first().data('file'));
            // }else {

            // }

            // $('#uploaded_file-error').hide();

            var shortText = jQuery.trim(data[1]).substring(0, 20).trim(this) + "...";
            console.log(data[0])
            console.log(data[1])
            console.log(shortText)

            $(':hidden[name=thumbnail_image]').val(data[0]);

            $uploadResponse2.text(shortText);

        }
    });

    $('.choose-category').on('click', function(e){
      $(this).prev('input').trigger('click');
    })

  
});
</script>
@stop