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

	/* COLOR OPTION FOR DETAILED SHIRT*/
	$('.color-option').click(function(){
	    //$('.base').css('background-color', $(this).attr('id'));
	    hexcolor = $(this).attr('data-color');
		//hexToRgb(hexcolor);
		changecolor(hexcolor,'1');
	});

	//colorchange();

	function hexToRgb(hex) {
	    var bigint = parseInt(hex, 16);
	    var r = (bigint >> 16) & 255;
	    var g = (bigint >> 8) & 255;
	    var b = bigint & 255;

	    colorchange(r,g,b);

	}

	

	function colorchange(red,green,blue) {
    	var canvas = document.getElementById("canvas"),
	    ctx = canvas.getContext("2d"),
	    image = document.getElementById("testimage");

		ctx.clearRect(0, 0, 263, 327);
		ctx.drawImage(image,0,0);
		var imgd = ctx.getImageData(0, 0, 263, 327),
		    pix = imgd.data,
		    uniqueColor = [81,188,24]; // Blue for an example, can change this value to be anything.

		// Loops through all of the pixels and modifies the components.
		for (var i = 0, n = pix.length; i <n; i += 4) {
			pix[i] = red;   // Red component
			pix[i+1] = green; // Blue component
			pix[i+2] = blue; // Green component
			//pix[i+3] = 0;
			r = pix[i];
			g = pix[i + 1];
			b = pix[i + 2];	
			average = (r + g + b) / 3 >>> 0; // quick floor
        	pix[i] = pix[i + 1] = pix[i + 2] = average;
		}
		ctx.putImageData(imgd, 0, 0);
	}

	function changecolor(color,alpha){
		var canvas = document.getElementById("canvas"), // shared instance
		//var canvas = document.createElement("canvas")
		context = canvas.getContext("2d");
		image = document.getElementById("testimage");
		canvas.width = image.width;
		canvas.height = image.height;
		
	    
	    //alert(color);
	    context.clearRect(0, 0, image.width, image.height);
        context.drawImage(image, 0, 0, canvas.width, canvas.height);

	    //desaturate
	    
	    var imageData = context.getImageData(0, 0, image.width, image.height),
            pixels = imageData.data,
            i, l, r, g, b, a, average;

        for (i = 0, l = pixels.length; i < l; i += 4) {
            a = pixels[i + 3];
            if (a === 0) {
                continue;
            } // skip if pixel is transparent

            r = pixels[i];
            g = pixels[i + 1];
            b = pixels[i + 2];

            average = (r + g + b) / 3 >>> 0; // quick floor
            pixels[i] = pixels[i + 1] = pixels[i + 2] = average;
        }
    

        context.putImageData(imageData, 0, 0);

        //colorize
        
        context.globalCompositeOperation = "source-atop";
        context.globalAlpha = alpha;
        context.fillStyle = color;
        context.fillRect(0, 0, canvas.width, canvas.height);
        // reset
        context.globalCompositeOperation = "source-over";
        context.globalAlpha = 1.0;

        canvas.toDataURL("image/png", 1);
		
        
	}

	
	 



});