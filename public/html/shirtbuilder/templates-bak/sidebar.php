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

	<!-- Content -->
	<div class="fpd-content fpd-content-color">
		<!-- Products -->
		<div class="fpd-products">
			<ul class="fpd-clearfix"></ul>
		</div>
		<!-- Designs -->
		<div class="fpd-designs">
			<ul class="fpd-clearfix"></ul>
		</div>
		<!-- Edit text -->
		<div class="fpd-custom-text">
			<h3><?php echo $custom_text_headline; ?></h3>
			<textarea class="fpd-text-input fpd-textarea"><?php echo $custom_text_placeholder; ?></textarea>
			<button class="fpd-button-submit fpd-button fpd-submit "><?php echo $custom_text_button; ?></button>
		</div>
		<!-- Edit elements -->
		<div class="fpd-edit-elements">
			<h3><?php echo $edit_elements_headline; ?></h3>
			<div>
				<select class="fpd-elements-dropdown">
					<option value="none"><?php echo $edit_elements_dropdown_none; ?></option>
				</select>
			</div>
			<!-- Toolbar -->
			<div class="fpd-toolbar">
				<div class="fpd-color-picker">
					<input type="text" value="">
				</div>
				<div class="fpd-fonts-dropdown-wrapper">
					<select class="fpd-fonts-dropdown"></select>
				</div>
				<div class="fpd-customize-text">
					<textarea value="" name="element_text" class="fpd-text-input fpd-textarea fpd-active"></textarea>
					<div class="fpd-text-styles">
						<button title="<?php echo $customize_text_align_left; ?>" class="fpd-align-left fpd-button fpd-tooltip"><span class="fa fa-align-left"></span></button>
						<button title="<?php echo $customize_text_align_center; ?>" class="fpd-align-center fpd-button fpd-tooltip"><span class="fa fa-align-center"></span></button>
						<button title="<?php echo $customize_text_align_right; ?>" class="fpd-align-right fpd-button fpd-tooltip"><span class="fa fa-align-right"></span></button>
						<button title="<?php echo $customize_text_bold; ?>" class="fpd-bold fpd-button fpd-tooltip"><span class="fa fa-bold"></span></button>
						<button title="<?php echo $customize_text_italic; ?>" class="fpd-italic fpd-button fpd-tooltip"><span class="fa fa-italic"></span></button>
					</div>
				</div>
				<div class="fpd-patterns-wrapper">
					<ul class="fpd-border-color"></ul>
				</div>
				<div class="fpd-element-buttons">
					<button title="<?php echo $customize_center_h; ?>" class="fpd-center-horizontal fpd-button fpd-tooltip"><span class="fa fa-arrows-h"></span></button>
					<button title="<?php echo $customize_center_c; ?>" class="fpd-center-vertical fpd-button fpd-tooltip"><span class="fa fa-arrows-v"></span></button>
					<button title="<?php echo $customize_center_move_down; ?>" class="fpd-move-down fpd-button fpd-tooltip"><span class="fa fa-arrow-down"></span></button>
					<button title="<?php echo $customize_center_move_up; ?>" class="fpd-move-up fpd-button fpd-tooltip"><span class="fa fa-arrow-up"></span></button>
					<button title="<?php echo $customize_center_reset; ?>" class="fpd-reset fpd-button fpd-tooltip"><span class="fa fa-refresh"></span></button>
					<button title="<?php echo $customize_center_trash; ?>" class="fpd-trash fpd-button fpd-button-danger fpd-tooltip"><span class="fa fa-trash-o"></span></button>
				</div>
			</div>
		</div>
		<!-- Upload design -->
		<div class="fpd-upload-designs">
			<h3><?php echo $upload_design_headline; ?></h3>
			<p><?php echo $upload_design_info; ?></p>
			<button class="fpd-button-submit fpd-button fpd-submit"><?php echo $upload_design_button; ?></button>
			<form class="fpd-upload-form" style="display: none;">
				<input type="file" class="fpd-input-design" name="uploaded_file"  />
			</form>
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