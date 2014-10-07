$( document ).ready(function() {

	
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

	$(".addtocart-link").on("click",function(){
		// $('#cart-modal').modal('show')
	});

	$(".storeloc-link").on("click",function(e){
		e.preventDefault();
		$('#store-modal').modal('show')
	});


	//OWL CAROUSEL HOMEPAGE
	$("#slider-homepage").owlCarousel({

      navigation : true,
      navigationText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem : true
    });

    $(".more-products-slider").owlCarousel({
      navigation : true,
      slideSpeed : 300,
      paginationSpeed : 400,
      items : 5
    });
	



    //WINDOW ON RESIZE
    $(window).resize(function() {
    	var windowHeight = $(document).height();
    	$('.mobile-menu-items').css("height", windowHeight);
    	$('.mobile-menu-items').css("display", "none");

	});

});