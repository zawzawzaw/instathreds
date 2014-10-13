$( document ).ready(function() {

	var $window = $(window),
		$document = $(document),
		$preLoader = $('#preloader'),
		windowHeight = $document.height(),
		$mainNav = $('.navigation-menu'),
		$mobileMenu = $('.mobile-menu'),
		$mobileMenuItems = $('.mobile-menu-items'),
		$signupContainer = $('#signup'),
		$loginContainer = $('#login'),
		$signupLoginMsg = $('.alert'),
		$sliderContainer = $('.slider'),
		signupLoginMsg = $signupLoginMsg.html();
		

	$window.load(function() { // makes sure the whole site is loaded
		$preLoader.children("#status").fadeOut(); // will first fade out the loading animation
		$preLoader.delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
		$mobileMenuItems.css("height", windowHeight);
	});

    $window.resize(function() {

    	$mobileMenuItems.css("height", windowHeight);
    	$mobileMenuItems.css("display", "none");

	});

    // $mainNav.children('.menu-login').find
	$('.user-account-btn').on('click', function(e){

		e.preventDefault();

		var link = $(this).attr('href');
		var id = $(this).data('id');

		$(link).modal('show');

		if(id=='login')
			$(link).find('#login-tab a:first').tab('show');
		else
			$(link).find('#login-tab a:last').tab('show');

	});

	$mobileMenu.on("click",function(){

	  $('.mobile-menu-items').slideToggle( "slow" );

	});

    $sliderContainer.find('#slider-homepage').owlCarousel({

      navigation : true,
      navigationText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem : true,
      autoPlay : 5000

    });

    $(".more-products-slider").owlCarousel({
      navigation : true,
      slideSpeed : 300,
      paginationSpeed : 400,
      items : 5
    });

	$signupContainer.children('form').find('button').on('click', function(e){
		
		e.preventDefault();
		$(this).closest('form').submit();

	});	

	$signupContainer.children('form').find('input[name="email"]').on('keypress', function(e){
		if(e.which==13) {
			$(this).closest('form').submit();	
		}
	});

	$signupContainer.children('form').validate({
		rules: {
			username: {
				required: true,
				alphanumeric: true,
				minlength: 3
			},
			password: {
				required: true,
				minlength: 6,
				maxlength: 12
			},
			password_confirmation: {
				required: true,
				equalTo: '#password'
			},
			email: {
				required: true,
				email: true
			}
		},
		messages: {
			username : {
				required: 'Please enter your user name',
				alphanumeric: 'Only characters and numbers allowed',
				minlength: 'Please enter minimum 3 characters'
			},
			password: {
				required: 'Please enter your password',
				minlength: 'Please enter minimum 6 characters',
				maxlength: 'Max 12 characters allowed'
			},
			password_confirmation: {
				required: 'Please enter password confirmation',
				equalTo: "Password mismatch"
			},
			email: {
				required: 'Please enter your email address',
				email: 'Invalid email address'
			}
		}
	});

	$loginContainer.children('form').find('input[name="password"]').on('keypress', function(e){
		if(e.which==13) {
			$(this).closest('form').submit();	
		}
	});

	$loginContainer.children('form').find('button').on('click', function(e){

		e.preventDefault();
		$(this).closest('form').submit();

	});

	$loginContainer.children('form').validate({
		rules : {
			username : 'required',
			password : 'required'
		},
		messages : {
			username : 'Please enter your user name',
			password : 'Please enter your password'
		}
	});

	jQuery.validator.addMethod("alphanumeric", function(value, element) {
		return this.optional(element) || value == value.match(/^[a-z0-9A-Z#]+$/);
	},"Only Characters, Numbers & Hash Allowed.");

	if(signupLoginMsg) {
		if(signupLoginMsg == 'Your username or password was incorrect.'){
			$('#login-modal').modal('show');
			$('#login-tab a:first').tab('show');
		}else if(signupLoginMsg== 'The following errors occurred:') {
			$('#login-modal').modal('show');
			$('#login-tab a:last').tab('show');
		}else if(signupLoginMsg=='Thanks for registering! You may now login.') {
			$('#login-modal').modal('show');
			$('#login-tab a:last').tab('show');
		}
	}

	//ACCOUNT NAV
	//Add Hover effect to menus
	$('.menu-account-nav').hover(function() {
	  	$(".avatar-frame").css('background','#fff'); 
	  	$(this).parent().find('.dropdown-target').show();
	}, function() {
	 	$(".avatar-frame").css('background','none');
	  	$(this).parent().find('.dropdown-target').hide();
	});


	//TABLE
	$('#orders-table').dataTable( {
	  "iDisplayLength": 25,
      "sPaginationType": "full_numbers",
      "bFilter": false,
      "bLengthChange": false
      
    });

	
});