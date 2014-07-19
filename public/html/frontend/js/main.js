$( document ).ready(function() {

	console.log("test");

	//PRELOADER
	$(window).load(function() { // makes sure the whole site is loaded
		$("#status").fadeOut(); // will first fade out the loading animation
		$("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.

		var windowHeight = $(document).height();
		$('.mobile-menu-items').css("height", windowHeight);
	})

	//MOBILE MENU ON CLICK
	$(".mobile-menu").on("click",function(){
	  $('.mobile-menu-items').slideToggle( "slow" );
	});

	//LOGIN/SIGNUP ON CLICK
	$(".login-link").on("click",function(){
		$('#login-modal').modal('show')
		var id = $(this).attr("data-id");
		$('#login-tab a:first').tab('show');	
	});

	$(".signup-link").on("click",function(){
		$('#login-modal').modal('show')
		var id = $(this).attr("data-id");
		$('#login-tab a:last').tab('show');	
	});	



	
	//BANNER CAROUSEL
    $('#carousel').carouFredSel({
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

    //WINDOW ON RESIZE
    $(window).resize(function() {
    	var windowHeight = $(document).height();
    	$('.mobile-menu-items').css("height", windowHeight);
    	$('.mobile-menu-items').css("display", "none");

	});

});