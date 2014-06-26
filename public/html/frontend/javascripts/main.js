$( document ).ready(function() {

	console.log("test");

	//PRELOADER
	$(window).load(function() { // makes sure the whole site is loaded
	  $("#status").fadeOut(); // will first fade out the loading animation
	  $("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
	})


	//$('.dropdown-toggle').dropdown()

	// Using custom configuration
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
});