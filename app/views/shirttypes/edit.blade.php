@section('sidebar')
 <h5 class="sidebartitle">Navigation</h5>
  <ul class="nav nav-pills nav-stacked nav-bracket">
    <li class=""><a href="{{ URL::to('admin') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
    <li><a href="#"><span class="pull-right badge badge-success">12</span><i class="fa fa-pencil-square-o"></i> <span>Orders</span></a></li>
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
            <h2><i class="fa fa-home"></i>Type of Shirt in Store<span style="display:none;"></span></h2>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="{{ route('admin') }}">Home</a></li>
                    <li><a href="{{ route('admin.shirttypes.index') }}">Type of Shirt in Store</a></li>
                    <li class="active">Upload Type of Shirt</li>
                </ol>
            </div>
        </div>
        
        <div class="contentpanel">
        	{{ Form::open(array('url' => '/admin/shirttypes/'.$shirttype->id, 'method' => 'put', 'class' => 'form-horizontal')) }}
          <!-- <form method="PUT" action="/admin/shirttypes" class="form-horizontal"> -->
          <div class="row">
            <div class="col-sm-9">

              <!-- CREATE A SLIDE FORM -->
              <div class="panel panel-default">
                

                <div class="panel-heading">
                  <h4 class="panel-title">EDIT TYPE OF SHIRT</h4>
                </div>
                <div class="panel-body"> 
                    <div class="row">
                    	<div class="col-md-12">
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
                    </div>       

                    <!-- <div class="form-group">
                      <label class="col-sm-3 control-label">Upload Design (PNG)</label>
                      <div class="col-sm-6">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                          <div class="input-append">
                            <div class="uneditable-input">
                              <i class="glyphicon glyphicon-file fileupload-exists"></i>
                              <span class="fileupload-preview">{{ $shirttype->image }}</span>
                            </div>
                            <span class="btn btn-default btn-file">
                              <span class="fileupload-new">Change</span>
                              <span class="fileupload-exists">Change</span>
                              <input id="file_upload" name="product_image" type="file" />
                              <input type="hidden" name="id" value="{{ $shirttype->id }}" />
                              <input type="hidden" name="image" value="{{ $shirttype->image }}" />
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
                              <span class="fileupload-preview-2">{{ $shirttype->thumbnail_image }}</span>
                            </div>
                            <span class="btn btn-default btn-file">
                              <span class="fileupload-new">Change</span>
                              <span class="fileupload-exists">Change</span>
                              <input id="file_upload_2" name="product_image_2" type="file" />
                              <input type="hidden" name="thumbnail_image" value="{{ $shirttype->thumbnail_image }}" />
                            </span>
                            <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                          </div>
                        </div>
                      </div>
                    </div> -->

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Title</label>
                      <div class="col-sm-6">
                        <input type="text" name="title" placeholder="Enter shirt type" class="form-control" value="{{ $shirttype->title }}" />
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Price</label>
                      <div class="col-sm-6">
                        <input type="text" name="price" placeholder="Enter price for shirt type" class="form-control" value="{{ $shirttype->price }}" />
                      </div>
                    </div>

					@if($colours->count() > 0)
		                  @foreach($colours as $index => $colour)
			                <div class="form-group">
			                  <label class="col-sm-3 control-label">Colour {{ $index + 1 }}</label>
			                  <div class="col-sm-6">
                            <input type="hidden" name="colour_{{ $index + 1 }}_id" value="{{ $colour->id }}">
				                    <input type="text" name="colour_{{ $index + 1 }}" placeholder="Enter colour for shirt type" class="colour-input form-control" value="{{ $colour->hex_value }}" />
			                  </div>
			                </div>
                    	@endforeach  
	                @endif

                  <div class="colour-input-to-clone" style="display:none;">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Colour</label>
                      <div class="col-sm-6">
                          <input type="text" disabled="disabled" name="colour" placeholder="Enter colour for shirt type" class="form-control" value="" />
                      </div>
                    </div>
                  </div>

	                <div class="clones-color" style="margin-bottom: 15px;"></div>

	                <div class="form-group">
	                	<div class="col-sm-6 col-sm-offset-3">
	                		<a href="javascript:void(0);" class="addMoreColor">Add Colours +</a>
	                	</div>
	                </div>

                  <input type="hidden" name="colour_imports">

	                @if($sizes->count() > 0)
		                  @foreach($sizes as $index => $size)
			                <div class="form-group">
			                  <label class="col-sm-3 control-label">Size {{ $index + 1 }}</label>
			                  <div class="col-sm-6">
                          <input type="hidden" name="size_{{ $index + 1 }}_id" value="{{ $size->id }}">
			                    <input type="text" name="size_{{ $index + 1 }}" placeholder="Enter size for shirt type" class="size-input form-control" value="{{ $size->title }}" />
			                  </div>
			                </div>
                    	@endforeach  
	                @endif

                  <div class="size-input-to-clone" style="display:none;">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Size</label>
                        <div class="col-sm-6">
                          <input type="text" disabled="disabled" name="size" placeholder="Enter size for shirt type" class="form-control" value="" />
                        </div>
                      </div>
                  </div>

				          <div class="clones-size" style="margin-bottom: 15px;"></div>

	                <div class="form-group">
	                	<div class="col-sm-6 col-sm-offset-3">
	                		<a href="javascript:void(0);" class="addMoreSize">Add Sizes +</a>
	                	</div>
	                </div>

                  <input type="hidden" name="size_imports">

                    <!-- <div class="form-group">
                      <label class="col-sm-3 control-label">Price</label>
                      <div class="col-sm-6">
                        <input type="text" name="price" placeholder="Enter your product price" class="form-control" value="{{ $shirttype->price }}" />
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Stock</label>
                      <div class="col-sm-6">
                        <input type="text" name="stock" placeholder="Enter your product stock" class="form-control" value="{{ $shirttype->stock }}" />
                      </div>
                    </div> -->
                    

                  
                </div><!-- panel-body -->

                <div class="panel-footer">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            {{ Form::token() }} 
                            <input type="submit" class="submit-btn btn btn-primary" />&nbsp;
                            <a href="{{ route('admin.shirttypes.index') }}"><button class="btn btn-default">Cancel</button></a>
                        </div>
                    </div>
                </div><!-- panel-footer -->
                
              </div><!-- panel -->

            </div>
            <div class="col-sm-3">
              
              <div class="fm-sidebar">
                
                <h5 class="subtitle">Types <!-- <a href="" class="category-add-link pull-right">+ Add Category</a> --></h5>
                <div class="form-group category-add">
                    <input type="text" style="margin-bottom:5px;" class="form-control input-sm" placeholder="New Category">
                    <button class="btn btn-primary btn-sm pull-right">Add</button>
                </div>
                <div class="clearfix mb10"></div>

                <ul class="folder-list">
                    @foreach($genders as $gender)
                  	<li>
                      	<div class="ckbox ckbox-default">
                          	<input type="checkbox" name="gender_id" class="choose-category" value="{{ $gender->id }}" @if($shirttype->gender_id==$gender->id) checked="checked" @endif>
                          	<label class="choose-category" for="check1">{{ $gender->title }}</label>
                      	</div>
                  	</li>
                    @endforeach
                    
                </ul>  
              
              </div>          
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

    // // File Upload
    // var $uploadBtn = $('#file_upload');
    // var $uploadResponse = $('.fileupload-preview')

    // $uploadBtn.uploadifive({
    //     'auto'      : true,
    //     'fileType'     : 'image/*',
    //     'fileSizeLimit' : '10MB',
    //     'buttonText'   : '',
    //     'uploadScript' : "{{ route('admin.uploadfiles') }}",
    //     'onError'      : function(errorType) {
    //         // $uploadBtn.uploadifive('cancel', $('.uploadifive-queue-item').first().data('file'));
    //         // $uploadResponse.text(errorType).css('color','red');
    //     },
    //     'onUploadComplete' : function(file, data) {
    //         console.log(data);

    //         var data = data.split("||").concat();

    //         var shortText = jQuery.trim(data[1]).substring(0, 20).trim(this) + "...";
    //         console.log(data[0])
    //         console.log(data[1])
    //         console.log(shortText)

    //         $(':hidden[name=image]').val(data[0]);

    //         $uploadResponse.text(shortText);

    //     }
    // });

    // // File Upload
    // var $uploadBtn2 = $('#file_upload_2');
    // var $uploadResponse2 = $('.fileupload-preview-2')

    // $uploadBtn2.uploadifive({
    //     'auto'      : true,
    //     'fileType'     : 'image/*',
    //     'fileSizeLimit' : '10MB',
    //     'buttonText'   : '',
    //     'formData'         : {'type' : 'thumbnail'},
    //     'uploadScript' : "{{ route('admin.uploadfiles') }}",
    //     'onError'      : function(errorType) {
    //         // $uploadBtn.uploadifive('cancel', $('.uploadifive-queue-item').first().data('file'));
    //         // $uploadResponse.text(errorType).css('color','red');
    //     },
    //     'onUploadComplete' : function(file, data) {
    //         console.log(data);

    //         var data = data.split("||").concat();

    //         var shortText = jQuery.trim(data[1]).substring(0, 20).trim(this) + "...";
    //         console.log(data[0])
    //         console.log(data[1])
    //         console.log(shortText)

    //         $(':hidden[name=thumbnail_image]').val(data[0]);

    //         $uploadResponse2.text(shortText);

    //     }
    // });

    $('.choose-category').on('click', function(e){
      $(this).prev('input').trigger('click');
    })

    $('.addMoreColor').on('click', function(e){
      // var newColourInput = $(this).parent().parent().prev().prev('.form-group').clone();
    	var newColourInput = $('.colour-input-to-clone').children().clone();

      newColourInput.find('input').addClass('colour-input').attr('disabled', false);

    	$('.clones-color').append(newColourInput);

    	newColourInput.find('.control-label').text('Colour ' + parseInt($('.colour-input').length));
    	newColourInput.find('input').attr('name','colour_' + parseInt($('.colour-input').length)).val('');

    });

    $('.addMoreSize').on('click', function(e){
      // var newSizeInput = $(this).parent().parent().prev().prev('.form-group').clone();
    	var newSizeInput = $('.size-input-to-clone').children().clone();

      newSizeInput.find('input').addClass('size-input').attr('disabled', false);

    	$('.clones-size').append(newSizeInput);

    	newSizeInput.find('.control-label').text('Size ' + parseInt($('.size-input').length));
    	newSizeInput.find('input').attr('name','size_' + parseInt($('.size-input').length)).val('');

    });

    $('.submit-btn').on('click', function(e){
      e.preventDefault();

      var colourInputs = [];
      var sizeInputs = [];
      
      $('.colour-input').each(function(index, eachColorInput){
        colourInputs.push($(eachColorInput).attr('name'));
      });

      $('.size-input').each(function(index, eachSizeInput){
        sizeInputs.push($(eachSizeInput).attr('name'));
      });

      $('input[name="colour_imports"]').val(colourInputs.join());
      $('input[name="size_imports"]').val(sizeInputs.join());

      $(this).closest('form').submit();

    });
  
});
</script>
@stop