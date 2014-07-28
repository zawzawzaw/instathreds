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
		$signupLoginError = $('.alert'),
		$sliderContainer = $('.slider');
		

	$window.load(function() { // makes sure the whole site is loaded

		$preLoader.children("#status").fadeOut(); // will first fade out the loading animation
		$preLoader.delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
		$mobileMenuItems.css("height", windowHeight);

	});

    $window.resize(function() {

    	$mobileMenuItems.css("height", windowHeight);
    	$mobileMenuItems.css("display", "none");

	});

	$mainNav.children('.menu-login').find('.user-account-btn').on('click', function(e){

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

    $sliderContainer.find('#carousel').carouFredSel({

    	responsive  : true,
    	auto : false,
    	prev : "#prev-banner",
		next : "#next-banner",
		items		: {
			visible		: 1,
			width		: 1230,
			height		: "35%"
		}

    });

	$signupContainer.children('form').find('button').on('click', function(e){
		
		e.preventDefault();
		$(this).closest('form').submit();

	});	

	$loginContainer.children('form').find('button').on('click', function(e){

		e.preventDefault();
		$(this).closest('form').submit();

	});

	var errorMsg = $signupLoginError.html();

	if(errorMsg) {
		if(errorMsg == 'Your username/password combination was incorrect'){
			$('#login-modal').modal('show');
			$('#login-tab a:first').tab('show');
		}else if(errorMsg== 'The following errors occurred') {
			$('#login-modal').modal('show');
			$('#login-tab a:last').tab('show');
		}
	}
});