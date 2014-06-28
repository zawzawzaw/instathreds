<?php
//labels navigation
$products_tooltip = 'Products';
$designs_tooltip = 'Designs';
$add_own_text_tooltip = 'Add own text';
$edit_elements_tooltip = 'Edit elements';
$upload_designs_tooltip = 'Add Own Designs';
$fb_photos_tooltip = 'Add Photos From Facebook';
$saved_products_tooltip = 'Your saved products';

//labels content
$custom_text_headline = 'Add Text';
$custom_text_placeholder = 'Enter Your Text';
$custom_text_button = 'ADD TEXT';

$edit_elements_headline = 'Edit Elements';
$edit_elements_dropdown_none = 'None';

$customize_text_align_left = 'Align Left';
$customize_text_align_center = 'Align Center';
$customize_text_align_right = 'Align Right';
$customize_text_bold = 'Bold';
$customize_text_italic = 'Italic';

$customize_center_h = 'Center Horizontal';
$customize_center_c = 'Center Vertical';
$customize_center_move_down = 'Move It Down';
$customize_center_move_up = 'Move It Up';
$customize_center_reset = 'Reset To His Origin';
$customize_center_trash = 'Trash';

$upload_design_headline = 'Add Own Designs';
$upload_design_info = 'To upload own designs, you have to use Firefox, Safari, Chrome or at least IE10!';
$upload_design_button = 'Upload';

$fb_user_photos = 'Add Facebook Photos';
$fb_select_a_friend = 'Select a friend';
$fb_select_an_album = 'Select an album';

$saved_products_headline = 'Your Saved Products';

?>

<section class="fpd-sidebar fpd-border-color fpd-clearfix">


	<div class="logo">
		<a href=""><img src="images/fpd/logo-instathreds.png"></a>
		<h6>BUILD A SHIRT</h6>
	</div>	


	<div class="panel-group" id="accordion">
	  <div class="panel panel-default">
	    <div class="panel-heading">
	        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
	          <img src="images/fpd/icon-shirt.png">Select Shirt
	        </a>
	    </div>
	    <div id="collapseOne" class="panel-collapse collapse">
	      <div class="panel-body" style="height:250px;">
	        <div class="select" style="margin-bottom:20px;">
			  <a data-toggle="dropdown" class="dropdown" href="#">Shirt Type<b class="caret"></b></a>
			  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
			  	<li><a href="">Round Neck</a></li>
			  	<li><a href="">V-neck</a></li>
			  	<li><a href="">3/4</a></li>			  	
			  </ul>
			</div>

			<h6 class="title">Select Color</h6>
			<div class="shirt-colors">
				<div class="color"></div>
				<div class="color"></div>
				<div class="color"></div>
				<div class="color"></div>
				<div class="color"></div>
				<div class="color"></div>
				<div class="color"></div>
				<div class="color"></div>
			</div>

			<div class="select" style="margin:20px 0 20px 0;">
			  <a data-toggle="dropdown" class="dropdown" href="#">Size<b class="caret"></b></a>
			  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
			  	<li><a href="">Small</a></li>
			  	<li><a href="">Medium</a></li>
			  	<li><a href="">Large</a></li>
			  	<li><a href="">X-Large</a></li>
			  </ul>
			</div>

			<div class="detail">
				<input type="checkbox"> White Underbase <span>?</span><br>
				<input type="checkbox"> Upgrade to large print area <span>?</span>
			</div>

	      </div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
			  <img src="images/fpd/icon-camera.png">Select Image
			</a>
	    </div>
	    <div id="collapseTwo" class="panel-collapse collapse">
	      <div class="panel-body">
	      	<div class="image-select">
	      		<a href="">Instagram</a>
				<a href="">Folder</a>
	      		<a href="">Images</a>
	      	</div>

	      	<div class="select" style="margin:20px 0;">
	      		<a data-toggle="dropdown" class="dropdown" href="#">Category<b class="caret"></b></a>
				<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
					<li><a href="">Shapes</a></li>
					<li><a href="">Cool Stuff</a></li>
				</ul>
	      	</div>

	      	<div class="shapes">
	      		<ul>
	      			<li><img src="images/designs/converse.png"></li>
	      			<li><img src="images/designs/crown.png"></li>
	      			<li><img src="images/designs/heart_blur.png"></li>
	      			<li><img src="images/designs/heart_circle.png"></li>
	      			<li><img src="images/designs/men_women.png"></li>
	      			<li><img src="images/designs/retro_1.png"></li>
	      		</ul>
	      	</div>

	      	<div class="selected-image">
	      		<ul>
	      			<li><img src="images/designs/converse.png" style="width:25px;"></li>
	      			<li>
	      			Fill Color
	      			<div class="image-color"></div>
	      			</li>
	      			<li><a href="">Remove</a></li>
	      		</ul>	
	      	</div>

	      </div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading">
	      <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
	          <img src="images/fpd/icon-text.png">Select Text
	      </a>
	    </div>
	    <div id="collapseThree" class="panel-collapse collapse">
	      <div class="panel-body">
	        <div class="add-text">
	        	<h6>Add your text</h6>
	        	<textarea></textarea>
	        	<button>Add Text</button>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading">
	      <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
	          <img src="images/fpd/icon-cart.png">Cart
	      </a>
	    </div>
	  </div>

	</div>

	<!-- Content -->
	<div class="fpd-content fpd-content-color">
		<!-- Products -->
		<div class="fpd-products">
			<ul class="fpd-clearfix"></ul>
		</div>
	</div>


</section>