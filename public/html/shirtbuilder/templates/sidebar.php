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

	<!-- Navigation -->
	<div class="fpd-navigation fpd-main-color">
		<ul>
			<li class="fa fa-book fpd-tooltip" title="<?php echo $products_tooltip; ?>" data-target=".fpd-products"></li>
			<li class="fa fa-picture-o fpd-tooltip" title="<?php echo $designs_tooltip; ?>" data-target=".fpd-designs"></li>
			<li class="fa fa-font fpd-tooltip" title="<?php echo $add_own_text_tooltip; ?>" data-target=".fpd-custom-text"></li>
			<li class="fa fa-edit fpd-tooltip" title="<?php echo $edit_elements_tooltip; ?>" data-target=".fpd-edit-elements"></li>
			<li class="fa fa-plus-square fpd-tooltip" title="<?php echo $upload_designs_tooltip; ?>" data-target=".fpd-upload-designs"></li>
			<li class="fa fa-facebook fpd-tooltip" title="<?php echo $fb_photos_tooltip; ?>" data-target=".fpd-fb-user-photos"></li>
			<li class="fa fa-hdd-o fpd-tooltip" title="<?php echo $saved_products_tooltip; ?>" data-target=".fpd-saved-products"></li>
		</ul>
	</div>

	<!-- Logo -->
	<div class="logo">
		<a href=""><img src="images/fpd/logo-instathreds.png"></a>
		<h6>BUILD A SHIRT</h6>
	</div>

	<!-- Content -->
	<div class="fpd-content fpd-content-color">

		<div class="panel-group" id="accordion">
			<div class="panel panel-default">
			    <div class="panel-heading">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
			          <img src="images/fpd/icon-shirt.png">Select Shirt
			        </a>
			    </div>
			    <div id="collapseOne" data-index="0" class="panel-collapse collapse">
			      <div class="panel-body" style="height:250px;">
			      <!-- Products -->
					<div class="fpd-products">
						<div class="select" style="margin-bottom:20px;">
						  <a data-toggle="dropdown" class="dropdown" href="#">Shirt Type<b class="caret"></b></a>
						  <ul class="fpd-clearfix dropdown-menu" role="menu" aria-labelledby="dLabel">
						  </ul>
						</div>
					</div>

					<h6 class="title">Select Color</h6>
					<!-- Toolbar -->
					<div class="fpd-toolbar">
						<div class="fpd-color-picker">
							<input type="text" value="">
						</div>
					</div>

					<div class="select" style="margin:20px 0 20px 0;">
					  <a data-toggle="dropdown" class="dropdown" href="#">Size<b class="caret"></b></a>
					  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
					  	<li><a href="javascript:void(0);">Small</a></li>
					  	<li><a href="javascript:void(0);">Medium</a></li>
					  	<li><a href="javascript:void(0);">Large</a></li>
					  	<li><a href="javascript:void(0);">X-Large</a></li>
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
				<div id="collapseTwo" data-index="1" class="panel-collapse collapse">
				  <div class="panel-body">
				  	<!-- Upload design -->
				  	<div class="image-select">
						<div class="fpd-upload-designs">
							<a href="javascript:void(0);" class="fpd-button-instagram">Instagram</a>
							<a href="javascript:void(0);" class="fpd-button-submit fpd-button fpd-submit"><?php echo $upload_design_button; ?></a>
							<form class="fpd-upload-form" style="display: none;">
								<input type="file" class="fpd-input-design" name="uploaded_file"  />
							</form>
							<a href="javascript:void(0);">Images</a>
						</div>
				  	</div>

				  	<!-- Instagram User Photos -->
					<div class="fpd-in-user-photos">
						<h3><?php echo $fb_user_photos; ?></h3>
						<div>
							<div class="fpd-in-loader fpd-clearfix">
								<div class="in-login-button" data-max-rows="1" data-show-faces="false" data-scope="user_photos,friends_photos" autologoutlink="true"></div>
								<span class="fpd-loading-gif"></span>
							</div>
						</div>
						<ul class="fpd-in-user-photos-list fpd-border-color fpd-clearfix"></ul>
					</div>

				  	<div class="select" style="margin:20px 0;">
						<!-- Designs -->
						<div class="fpd-designs">
							<ul class="fpd-clearfix"></ul>
						</div>
				  	</div>

				  	<!-- <div class="shapes">
				  		<ul>
				  			<li><img src="images/designs/converse.png"></li>
				  			<li><img src="images/designs/crown.png"></li>
				  			<li><img src="images/designs/heart_blur.png"></li>
				  			<li><img src="images/designs/heart_circle.png"></li>
				  			<li><img src="images/designs/men_women.png"></li>
				  			<li><img src="images/designs/retro_1.png"></li>
				  		</ul>
				  	</div> -->

				  	<!-- <div class="selected-image">
				  		<ul>
				  			<li><img src="images/designs/converse.png" style="width:25px;"></li>
				  			<li>
				  			Fill Color
				  			<div class="image-color"></div>
				  			</li>
				  			<li><a href="">Remove</a></li>
				  		</ul>	
				  	</div> -->
				  </div>
				</div>
			</div>
		</div>
	  	
		<!-- Edit text -->
		<div class="fpd-custom-text">
			<h3><?php echo $custom_text_headline; ?></h3>
			<textarea class="fpd-text-input fpd-textarea"><?php echo $custom_text_placeholder; ?></textarea>
			<button class="fpd-button-submit fpd-button fpd-submit "><?php echo $custom_text_button; ?></button>
		</div>
		
		<!-- Facebook User Photos -->
		<div class="fpd-fb-user-photos">
			<h3><?php echo $fb_user_photos; ?></h3>
			<div>
				<div class="fpd-fb-loader fpd-clearfix">
					<div class="fb-login-button" data-max-rows="1" data-show-faces="false" data-scope="user_photos,friends_photos" autologoutlink="true"></div>
					<span class="fpd-loading-gif"></span>
				</div>
				<select class="fpd-fb-friends-select" data-placeholder="<?php echo $fb_select_a_friend; ?>">
					<option value=""></option>
				</select>
				<select class="fpd-fb-user-albums" data-placeholder="<?php echo $fb_select_an_album; ?>">
					<option value=""></option>
				</select>
			</div>
			<ul class="fpd-fb-user-photos-list fpd-border-color fpd-clearfix"></ul>
		</div>
		<!-- Saved products -->
		<div class="fpd-saved-products">
			<h3 class="fpd-border-color"><?php echo $saved_products_headline; ?></h3>
			<ul></ul>
		</div>
	</div>

</section>