@section('sidebar')
 <h5 class="sidebartitle">Navigation</h5>
  <ul class="nav nav-pills nav-stacked nav-bracket">
    <li class=""><a href="{{ URL::to('admin') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
    <li><a href="{{ URL::to('orders') }}"><span class="pull-right badge badge-success">12</span><i class="fa fa-pencil-square-o"></i> <span>Orders</span></a></li>
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
		<h2><i class="fa fa-home"></i> Type of Shirt in Store<span style="display:none;"></span></h2>
		<div class="breadcrumb-wrapper">
			<span class="label">You are here:</span>
			<ol class="breadcrumb">
				<li><a href="{{ URL::to('admin') }}">Home</a></li>
				<li class="active">Type of Shirt in Store</li>
			</ol>
		</div>
    </div>
    
    <div class="contentpanel">

		<ul class="filemanager-options">
			<li class="filter-type">
			  Show:
			  <a href="designs-store.html" class="active">All</a>
			  <a href="designs-store.html">Featured</a>
			  <a href="designs-store.html">Popular</a>
			  <a href="designs-store.html">Trending</a>
			  <a href="designs-store.html">Recent Uploads</a>
			</li>
			<li><a href="designs-store-pending.html" class="itemopt"><span class="label label-danger" style="margin-right:5px;">23</span>  Pending Designs</a></li>
		</ul>

		<div class="row">
			<div class="col-md-12">
			@if(isset($errors) && !empty($errors))
			<ul>
		        @foreach($errors->all() as $error)
		            <li>{{ $error }}</li>
		        @endforeach
		    </ul>
		    @endif

		    @if (Session::has('message'))
			  <div class="message alert">
			    <p>{{ Session::get('message') }}</p>
			  </div>
			@endif
		    </div>
		</div>

	      
      	<div class="row">
	        <div class="col-sm-9">
	          	<div class="row filemanager">
	          	@if($shirttypes->count() > 0)
	          		@foreach($shirttypes as $shirttype)
			            <div class="col-xs-6 col-sm-4 col-md-3 image">
			              <div class="thmb">
			                <div class="ckbox ckbox-default">
			                  <!-- <input type="checkbox" name="featured" class="featured-this" value="{{ $shirttype->id }}" @if($shirttype->featured) checked="checked" @endif />
			                  <label for="featured">Feature this!</label> -->
			                </div>
			                <div class="thmb-prev">
			                  <a href="{{ '/images/shirt-templates/'.$shirttype->image }}" data-rel="prettyPhoto">
								<?php $image_url = "/images/shirt-templates/".strtolower(str_replace(" ", "",$shirttype->gender->title)) . "-" . strtolower(str_replace(" ", "",$shirttype->title)) . "/" . strtolower(str_replace(" ", "",$shirttype->gender->title)) . "-" . strtolower(str_replace(" ", "",$shirttype->title))."-front-body.png" ?>

			                  	{{ HTML::image($image_url, '', array('style'=>'height: 160px;', 'class'=>'img-responsive')) }}
			                  </a>
			                </div>
			                <h5 class="fm-title"><a href="{{ '/admin/shirttypes/'.$shirttype->id.'/edit' }}">{{ $shirttype->title }}</a></h5>
			                <small class="text-muted">Type: {{ $shirttype->gender->title }}</small>
			              </div><!-- thmb -->
			            </div><!-- col-xs-6 -->
		            @endforeach
		        @else
		        	<div class="col-xs-6 col-sm-4 col-md-3 image">
						<p>No product found!</p>
					</div>
		        @endif
	          	</div><!-- row -->
				
				{{ $shirttypes->links() }}

	          	<!-- <ul class="pagination">
		            <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
		            <li><a href="#">1</a></li>
		            <li class="active"><a href="#">2</a></li>
		            <li><a href="#">3</a></li>
		            <li><a href="#">4</a></li>
		            <li><a href="#">5</a></li>
		            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
	          	</ul> -->
	        </div><!-- col-sm-9 -->

	        <div class="col-sm-3">
	          	<div class="fm-sidebar">

	          		<!-- <a href="{{ route('admin.shirttypes.create') }}"><button class="btn btn-primary btn-block" data-toggle="modal" data-target=".bs-example-modal">Add Shirt Type</button></a> -->
            		<div class="mb30"></div>
	            
	            	<h5 class="subtitle">Types<!-- <a href="" class="category-add-link pull-right">+ Add Types</a> --></h5>

		            <div class="form-group category-add">
			            {{ Form::open(array('url'=>'admin/genders', 'class'=>'form-signup')) }}
			              	<!-- <input type="text" style="margin-bottom:5px;" class="form-control input-sm" placeholder="New Category"> -->

			              	{{ Form::text('name', null, array('class'=>'form-control input-sm', 'placeholder'=>'New Category', 'style' => 'margin-bottom:5px;')) }}
			              	{{ Form::submit('Add', array('class'=>'btn btn-primary btn-sm pull-right'))}}
			              	
			              	<!-- <button type="submit" class="btn btn-primary btn-sm pull-right">Add</button> -->
			            {{ Form::close() }}
		            </div>
		            <div class="clearfix mb10"></div>

		            <ul class="folder-list">
		            	@foreach($genders as $gender)
							<li><a href="{{ URL::to('admin/shirttypes', $gender->id) }}"><i class="fa fa-folder-o"></i>{{ $gender->title }}</a></li>
		            	@endforeach
		            </ul>	           	          	        
	            
	          	</div>
	        </div><!-- col-sm-3 -->
      	</div><!-- row -->	                       
	</div><!-- contentpanel -->    
</div><!-- mainpanel -->

{{ HTML::script('js/admin/jquery-1.10.2.min.js') }}
{{ HTML::script('js/admin/jquery-migrate-1.2.1.min.js') }}
{{ HTML::script('js/admin/bootstrap.min.js') }}
{{ HTML::script('js/admin/modernizr.min.js') }}
{{ HTML::script('js/admin/jquery.sparkline.min.js') }}
{{ HTML::script('js/admin/toggles.min.js') }}
{{ HTML::script('js/admin/retina.min.js') }}
{{ HTML::script('js/admin/jquery.cookies.js') }}
{{ HTML::script('js/admin/jquery.prettyPhoto.js') }}
{{ HTML::script('js/admin/custom.js') }}

<script>
jQuery(document).ready(function(){

	jQuery('.category-add-link').click(function(e){
	  e.preventDefault();
	  jQuery(".category-add").show();

	});

	jQuery('.thmb').hover(function(){
	  var t = jQuery(this);
	  t.find('.ckbox').show();
	  t.find('.fm-group').show();
	}, function() {
	  var t = jQuery(this);
	  if(!t.closest('.thmb').hasClass('checked')) {
	    t.find('.ckbox').hide();
	    t.find('.fm-group').hide();
	  }
	});

	jQuery('.ckbox').each(function(){
	  var t = jQuery(this);
	  var parent = t.parent();
	  if(t.find('input').is(':checked')) {
	    t.show();
	    parent.find('.fm-group').show();
	    parent.addClass('checked');
	  }
	});


	jQuery('.ckbox').click(function(){
	  var t = jQuery(this);
	  if(!t.find('input').is(':checked')) {
	    t.closest('.thmb').removeClass('checked');
	    enable_itemopt(false);
	  } else {
	    t.closest('.thmb').addClass('checked');
	    enable_itemopt(true);
	  }
	});

	jQuery('#selectall').click(function(){
	  if(jQuery(this).is(':checked')) {
	    jQuery('.thmb').each(function(){
	      jQuery(this).find('input').attr('checked',true);
	      jQuery(this).addClass('checked');
	      jQuery(this).find('.ckbox, .fm-group').show();
	    });
	    enable_itemopt(true);
	  } else {
	    jQuery('.thmb').each(function(){
	      jQuery(this).find('input').attr('checked',false);
	      jQuery(this).removeClass('checked');
	      jQuery(this).find('.ckbox, .fm-group').hide();
	    });
	    enable_itemopt(false);
	  }
	});

	function enable_itemopt(enable) {
	  if(enable) {
	    jQuery('.itemopt').removeClass('disabled');
	  } else {
	    
	    // check all thumbs if no remaining checks
	    // before we can disabled the options
	    var ch = false;
	    jQuery('.thmb').each(function(){
	      if(jQuery(this).hasClass('checked'))
	        ch = true;
	    });
	    
	    if(!ch)
	      jQuery('.itemopt').addClass('disabled');
	  }
	}

	//Replaces data-rel attribute to rel.
	//We use data-rel because of w3c validation issue
	jQuery('a[data-rel]').each(function() {
	  jQuery(this).attr('rel', jQuery(this).data('rel'));
	});

	jQuery("a[rel^='prettyPhoto']").prettyPhoto();

});
	
	

</script>
@stop