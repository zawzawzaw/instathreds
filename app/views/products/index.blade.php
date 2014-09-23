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
			        Karlo Estrada
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
				<li><a href="{{ URL::to('admin') }}">Home</a></li>
				<li class="active">Designs in Store</li>
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
	        <div class="col-sm-9">
	          	<div class="row filemanager">
		            <div class="col-xs-6 col-sm-4 col-md-3 image">
		              <div class="thmb">
		                <div class="ckbox ckbox-default">
		                  <input type="checkbox" id="check1" value="1" />
		                  <label for="check1">Feature this!</label>
		                </div>
		                <div class="thmb-prev">
		                  <a href="images/admin/photos/image-sample1.jpg" data-rel="prettyPhoto">
		                  	{{ HTML::image('images/admin/photos/image-sample1-thumb.jpg', '', array('class'=>'img-responsive')) }}		                    
		                  </a>
		                </div>
		                <h5 class="fm-title"><a href="">Kingdom Come</a></h5>
		                <small class="text-muted">by karloestrada</small>
		                <small class="text-muted">Sales: 29</small>
		                <small class="text-muted">Category: Funny, Education</small>
		              </div><!-- thmb -->
		            </div><!-- col-xs-6 -->

		            <div class="col-xs-6 col-sm-4 col-md-3 image">
		              <div class="thmb">
		                <div class="ckbox ckbox-default">
		                  <input type="checkbox" id="check2" value="1" />
		                  <label for="check2">Feature this!</label>
		                </div>
		                <div class="thmb-prev">
		                  <a href="images/admin/photos/image-sample1.jpg" data-rel="prettyPhoto">
		                  	{{ HTML::image('images/admin/photos/image-sample1-thumb.jpg', '', array('class'=>'img-responsive')) }}		                    
		                  </a>
		                </div>
		                <h5 class="fm-title"><a href="">Kingdom Come</a></h5>
		                <small class="text-muted">by karloestrada</small>
		                <small class="text-muted">Sales: 29</small>
		                <small class="text-muted">Category: Funny, Education</small>
		              </div><!-- thmb -->
		            </div><!-- col-xs-6 -->

		            <div class="col-xs-6 col-sm-4 col-md-3 image">
		              <div class="thmb">
		                <div class="ckbox ckbox-default">
		                  <input type="checkbox" id="check3" value="1" />
		                  <label for="check3">Feature this!</label>
		                </div>
		                <div class="thmb-prev">
		                  <a href="images/admin/photos/image-sample1.jpg" data-rel="prettyPhoto">
		                  	{{ HTML::image('images/admin/photos/image-sample1-thumb.jpg', '', array('class'=>'img-responsive')) }}		                    
		                  </a>
		                </div>
		                <h5 class="fm-title"><a href="">Kingdom Come</a></h5>
		                <small class="text-muted">by karloestrada</small>
		                <small class="text-muted">Sales: 29</small>
		                <small class="text-muted">Category: Funny, Education</small>
		              </div><!-- thmb -->
		            </div><!-- col-xs-6 -->

		            <div class="col-xs-6 col-sm-4 col-md-3 image">
		              <div class="thmb">
		                <div class="ckbox ckbox-default">
		                  <input type="checkbox" id="check4" value="1" />
		                  <label for="check4">Feature this!</label>
		                </div>
		                <div class="thmb-prev">
		                  <a href="images/admin/photos/image-sample1.jpg" data-rel="prettyPhoto">
		                  	{{ HTML::image('images/admin/photos/image-sample1-thumb.jpg', '', array('class'=>'img-responsive')) }}		                    
		                  </a>
		                </div>
		                <h5 class="fm-title"><a href="">Kingdom Come</a></h5>
		                <small class="text-muted">by karloestrada</small>
		                <small class="text-muted">Sales: 29</small>
		                <small class="text-muted">Category: Funny, Education</small>
		              </div><!-- thmb -->
		            </div><!-- col-xs-6 -->

		            <div class="col-xs-6 col-sm-4 col-md-3 image">
		              <div class="thmb">
		                <div class="ckbox ckbox-default">
		                  <input type="checkbox" id="check5" value="1" />
		                  <label for="check5">Feature this!</label>
		                </div>
		                <div class="thmb-prev">
		                  <a href="images/admin/photos/image-sample1.jpg" data-rel="prettyPhoto">
		                  	{{ HTML::image('images/admin/photos/image-sample1-thumb.jpg', '', array('class'=>'img-responsive')) }}		                    
		                  </a>
		                </div>
		                <h5 class="fm-title"><a href="">Kingdom Come</a></h5>
		                <small class="text-muted">by karloestrada</small>
		                <small class="text-muted">Sales: 29</small>
		                <small class="text-muted">Category: Funny, Education</small>
		              </div><!-- thmb -->
		            </div><!-- col-xs-6 -->

		            <div class="col-xs-6 col-sm-4 col-md-3 image">
		              <div class="thmb">
		                <div class="ckbox ckbox-default">
		                  <input type="checkbox" id="check6" value="1" />
		                  <label for="check6">Feature this!</label>
		                </div>
		                <div class="thmb-prev">
		                  <a href="images/admin/photos/image-sample1.jpg" data-rel="prettyPhoto">
		                  	{{ HTML::image('images/admin/photos/image-sample1-thumb.jpg', '', array('class'=>'img-responsive')) }}		                    
		                  </a>
		                </div>
		                <h5 class="fm-title"><a href="">Kingdom Come</a></h5>
		                <small class="text-muted">by karloestrada</small>
		                <small class="text-muted">Sales: 29</small>
		                <small class="text-muted">Category: Funny, Education</small>
		              </div><!-- thmb -->
		            </div><!-- col-xs-6 -->

		            <div class="col-xs-6 col-sm-4 col-md-3 image">
		              <div class="thmb">
		                <div class="ckbox ckbox-default">
		                  <input type="checkbox" id="check7" value="1" />
		                  <label for="check7">Feature this!</label>
		                </div>
		                <div class="thmb-prev">
		                  <a href="images/admin/photos/image-sample1.jpg" data-rel="prettyPhoto">
		                  	{{ HTML::image('images/admin/photos/image-sample1-thumb.jpg', '', array('class'=>'img-responsive')) }}		                    
		                  </a>
		                </div>
		                <h5 class="fm-title"><a href="">Kingdom Come</a></h5>
		                <small class="text-muted">by karloestrada</small>
		                <small class="text-muted">Sales: 29</small>
		                <small class="text-muted">Category: Funny, Education</small>
		              </div><!-- thmb -->
		            </div><!-- col-xs-6 -->

		            <div class="col-xs-6 col-sm-4 col-md-3 image">
		              <div class="thmb">
		                <div class="ckbox ckbox-default">
		                  <input type="checkbox" id="check8" value="1" />
		                  <label for="check8">Feature this!</label>
		                </div>
		                <div class="thmb-prev">
		                  <a href="images/admin/photos/image-sample1.jpg" data-rel="prettyPhoto">
		                  	{{ HTML::image('images/admin/photos/image-sample1-thumb.jpg', '', array('class'=>'img-responsive')) }}		                    
		                  </a>
		                </div>
		                <h5 class="fm-title"><a href="">Kingdom Come</a></h5>
		                <small class="text-muted">by karloestrada</small>
		                <small class="text-muted">Sales: 29</small>
		                <small class="text-muted">Category: Funny, Education</small>
		              </div><!-- thmb -->
		            </div><!-- col-xs-6 -->

		            <div class="col-xs-6 col-sm-4 col-md-3 image">
		              <div class="thmb">
		                <div class="ckbox ckbox-default">
		                  <input type="checkbox" id="check9" value="1" />
		                  <label for="check9">Feature this!</label>
		                </div>
		                <div class="thmb-prev">
		                  <a href="images/admin/photos/image-sample1.jpg" data-rel="prettyPhoto">
		                  	{{ HTML::image('images/admin/photos/image-sample1-thumb.jpg', '', array('class'=>'img-responsive')) }}		                    
		                  </a>
		                </div>
		                <h5 class="fm-title"><a href="">Kingdom Come</a></h5>
		                <small class="text-muted">by karloestrada</small>
		                <small class="text-muted">Sales: 29</small>
		                <small class="text-muted">Category: Funny, Education</small>
		              </div><!-- thmb -->
		            </div><!-- col-xs-6 -->

		            <div class="col-xs-6 col-sm-4 col-md-3 image">
		              <div class="thmb">
		                <div class="ckbox ckbox-default">
		                  <input type="checkbox" id="check10" value="1" />
		                  <label for="check10">Feature this!</label>
		                </div>
		                <div class="thmb-prev">
		                  <a href="images/admin/photos/image-sample1.jpg" data-rel="prettyPhoto">
		                  	{{ HTML::image('images/admin/photos/image-sample1-thumb.jpg', '', array('class'=>'img-responsive')) }}		                    
		                  </a>
		                </div>
		                <h5 class="fm-title"><a href="">Kingdom Come</a></h5>
		                <small class="text-muted">by karloestrada</small>
		                <small class="text-muted">Sales: 29</small>
		                <small class="text-muted">Category: Funny, Education</small>
		              </div><!-- thmb -->
		            </div><!-- col-xs-6 -->

		            <div class="col-xs-6 col-sm-4 col-md-3 image">
		              <div class="thmb">
		                <div class="ckbox ckbox-default">
		                  <input type="checkbox" id="check11" value="1" />
		                  <label for="check11">Feature this!</label>
		                </div>
		                <div class="thmb-prev">
		                  <a href="images/admin/photos/image-sample1.jpg" data-rel="prettyPhoto">
		                  	{{ HTML::image('images/admin/photos/image-sample1-thumb.jpg', '', array('class'=>'img-responsive')) }}		                    
		                  </a>
		                </div>
		                <h5 class="fm-title"><a href="">Kingdom Come</a></h5>
		                <small class="text-muted">by karloestrada</small>
		                <small class="text-muted">Sales: 29</small>
		                <small class="text-muted">Category: Funny, Education</small>
		              </div><!-- thmb -->
		            </div><!-- col-xs-6 -->

		            <div class="col-xs-6 col-sm-4 col-md-3 image">
		              <div class="thmb">
		                <div class="ckbox ckbox-default">
		                  <input type="checkbox" id="check12" value="1" />
		                  <label for="check12">Feature this!</label>
		                </div>
		                <div class="thmb-prev">
		                  <a href="images/admin/photos/image-sample1.jpg" data-rel="prettyPhoto">
		                  	{{ HTML::image('images/admin/photos/image-sample1-thumb.jpg', '', array('class'=>'img-responsive')) }}		                    
		                  </a>
		                </div>
		                <h5 class="fm-title"><a href="">Kingdom Come</a></h5>
		                <small class="text-muted">by karloestrada</small>
		                <small class="text-muted">Sales: 29</small>
		                <small class="text-muted">Category: Funny, Education</small>
		              </div><!-- thmb -->
		            </div><!-- col-xs-6 -->

		            <div class="col-xs-6 col-sm-4 col-md-3 image">
		              <div class="thmb">
		                <div class="ckbox ckbox-default">
		                  <input type="checkbox" id="check13" value="1" />
		                  <label for="check13">Feature this!</label>
		                </div>
		                <div class="thmb-prev">
		                  <a href="images/admin/photos/image-sample1.jpg" data-rel="prettyPhoto">
		                  	{{ HTML::image('images/admin/photos/image-sample1-thumb.jpg', '', array('class'=>'img-responsive')) }}		                    
		                  </a>
		                </div>
		                <h5 class="fm-title"><a href="">Kingdom Come</a></h5>
		                <small class="text-muted">by karloestrada</small>
		                <small class="text-muted">Sales: 29</small>
		                <small class="text-muted">Category: Funny, Education</small>
		              </div><!-- thmb -->
		            </div><!-- col-xs-6 -->

		            <div class="col-xs-6 col-sm-4 col-md-3 image">
		              <div class="thmb">
		                <div class="ckbox ckbox-default">
		                  <input type="checkbox" id="check14" value="1" />
		                  <label for="check14">Feature this!</label>
		                </div>
		                <div class="thmb-prev">
		                  <a href="images/admin/photos/image-sample1.jpg" data-rel="prettyPhoto">
		                  	{{ HTML::image('images/admin/photos/image-sample1-thumb.jpg', '', array('class'=>'img-responsive')) }}		                    
		                  </a>
		                </div>
		                <h5 class="fm-title"><a href="">Kingdom Come</a></h5>
		                <small class="text-muted">by karloestrada</small>
		                <small class="text-muted">Sales: 29</small>
		                <small class="text-muted">Category: Funny, Education</small>
		              </div><!-- thmb -->
		            </div><!-- col-xs-6 -->

		            <div class="col-xs-6 col-sm-4 col-md-3 image">
		              <div class="thmb">
		                <div class="ckbox ckbox-default">
		                  <input type="checkbox" id="check15" value="1" />
		                  <label for="check15">Feature this!</label>
		                </div>
		                <div class="thmb-prev">
		                  <a href="images/admin/photos/image-sample1.jpg" data-rel="prettyPhoto">
		                  	{{ HTML::image('images/admin/photos/image-sample1-thumb.jpg', '', array('class'=>'img-responsive')) }}		                    
		                  </a>
		                </div>
		                <h5 class="fm-title"><a href="">Kingdom Come</a></h5>
		                <small class="text-muted">by karloestrada</small>
		                <small class="text-muted">Sales: 29</small>
		                <small class="text-muted">Category: Funny, Education</small>
		              </div><!-- thmb -->
		            </div><!-- col-xs-6 -->

		            <div class="col-xs-6 col-sm-4 col-md-3 image">
		              <div class="thmb">
		                <div class="ckbox ckbox-default">
		                  <input type="checkbox" id="check16" value="1" />
		                  <label for="check16">Feature this!</label>
		                </div>
		                <div class="thmb-prev">
		                  <a href="images/admin/photos/image-sample1.jpg" data-rel="prettyPhoto">
		                  	{{ HTML::image('images/admin/photos/image-sample1-thumb.jpg', '', array('class'=>'img-responsive')) }}		                    
		                  </a>
		                </div>
		                <h5 class="fm-title"><a href="">Kingdom Come</a></h5>
		                <small class="text-muted">by karloestrada</small>
		                <small class="text-muted">Sales: 29</small>
		                <small class="text-muted">Category: Funny, Education</small>
		              </div><!-- thmb -->
		            </div><!-- col-xs-6 -->		            		           
	          	</div><!-- row -->

	          	<ul class="pagination">
		            <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
		            <li><a href="#">1</a></li>
		            <li class="active"><a href="#">2</a></li>
		            <li><a href="#">3</a></li>
		            <li><a href="#">4</a></li>
		            <li><a href="#">5</a></li>
		            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
	          	</ul>
	        </div><!-- col-sm-9 -->

	        <div class="col-sm-3">
	          	<div class="fm-sidebar">
	            
	            	<h5 class="subtitle">Categories <a href="" class="category-add-link pull-right">+ Add Category</a></h5>

		            <div class="form-group category-add">
		              	<input type="text" style="margin-bottom:5px;" class="form-control input-sm" placeholder="New Category">
		              	<button class="btn btn-primary btn-sm pull-right">Add</button>
		            </div>
		            <div class="clearfix mb10"></div>

		            <ul class="folder-list">
		            	@foreach($categories as $category)
							<li><a href=""><i class="fa fa-folder-o"></i>{{ $category->name }}</a></li>
		            	@endforeach
						<!-- <li><a href=""><i class="fa fa-folder-o"></i> Inspirational</a></li>
						<li><a href=""><i class="fa fa-folder-o"></i> Animals & Pets</a></li>
						<li><a href=""><i class="fa fa-folder-o"></i> Artistic</a></li>
						<li><a href=""><i class="fa fa-folder-o"></i> Business</a></li>
						<li><a href=""><i class="fa fa-folder-o"></i> Careers & Professions</a></li>
						<li><a href=""><i class="fa fa-folder-o"></i> Charity / Non-Profit</a></li>
						<li><a href=""><i class="fa fa-folder-o"></i> Education</a></li>
						<li><a href=""><i class="fa fa-folder-o"></i> Entertainment</a></li>
						<li><a href=""><i class="fa fa-folder-o"></i> Families</a></li>
						<li><a href=""><i class="fa fa-folder-o"></i> Food & Drink</a></li>
						<li><a href=""><i class="fa fa-folder-o"></i> Funny & Humorous</a></li>
						<li><a href=""><i class="fa fa-folder-o"></i> Geek</a></li>
						<li><a href=""><i class="fa fa-folder-o"></i> Global</a></li>
						<li><a href=""><i class="fa fa-folder-o"></i> Health</a></li>
						<li><a href=""><i class="fa fa-folder-o"></i> obbies & Recreation</a></li>
						<li><a href=""><i class="fa fa-folder-o"></i> Languages</a></li>
						<li><a href=""><i class="fa fa-folder-o"></i> Occasions</a></li>
						<li><a href=""><i class="fa fa-folder-o"></i> Politics</a></li>
						<li><a href=""><i class="fa fa-folder-o"></i> Religion</a></li>
						<li><a href=""><i class="fa fa-folder-o"></i> Sexuality</a></li>
						<li><a href=""><i class="fa fa-folder-o"></i> Sports</a></li> -->
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