<!DOCTYPE HTML>
<html>
    <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Instathreds Shirt Builder</title>

    <!-- Style sheets -->
    {{ HTML::style('bootstrap/css/bootstrap.css') }}
    
    <!-- Google Webfonts -->
    {{ HTML::style('http://fonts.googleapis.com/css?family=Gorditas') }}

    <!-- Font-awesome for the icons -->
    {{ HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css') }}

    <!-- The plugins.css -->
    {{ HTML::style('css/plugins.min.css') }}
    <!-- The CSS for the plugin itself -->
	{{ HTML::style('css/jquery.fancyProductDesigner.css') }}
	<!-- Optional - only when you would like to use custom fonts -->
	{{ HTML::style('css/jquery.fancyProductDesigner-fonts.css') }}
	{{ HTML::style('css/main.css') }}

	<!-- TYPEKIT -->
    {{ HTML::script('//use.typekit.net/qcf3jnv.js') }}
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script> 

    <!-- Include js files -->
    {{ HTML::script('js/jquery.min.js') }}
	{{ HTML::script('bootstrap/js/bootstrap.min.js') }}

	<!-- HTML5 canvas library -->
	{{ HTML::script('js/fabric.js') }}

	<!-- Third-party plugins that are needed for Fancy Product Designer -->
	{{ HTML::script('js/plugins.min.js') }}

	<!-- The plugin itself -->
	{{ HTML::script('js/jquery.fancyProductDesigner.js') }}

    <!-- Include only if you would like to create a pdf from your product -->
    {{ HTML::script('jspdf/jspdf.min.js') }}
    {{ HTML::script('js/webfont.js') }}
    {{ HTML::script('js/jquery.blockUI.js') }}

    <script type="text/javascript">
	    
	    jQuery(document).ready(function(){

	    	var yourDesigner = $('#clothing-designer').fancyProductDesigner({
	    		editorMode: false,
	    		centerInBoundingbox:true, 
	    		fonts: ['Arial', 'Fearless', 'Helvetica', 'Times New Roman', 'Verdana', 'Geneva', 'Gorditas'],
	    		customTextParameters: {colors: "#000", removable: true, resizable: true, draggable: true, rotatable: true, autoCenter: true, boundingBox: {"x": 325, "y": 345, "width": 200, "height": 350}},
	    		uploadedDesignsParameters: {draggable: true, removable: true, resizable: true, rotatable: true, colors: '#000', autoCenter: true, boundingBox: {"x": 325, "y": 345, "width": 200, "height": 350}},
	    		zoomFactor: 1
	    	}).data('fancy-product-designer');

	    	//print button
			$('#print-button').click(function(){
				yourDesigner.print();
				return false;
			});

			$('#clothing-designer').on('ready', function() {
			  //the designer is ready
			  //console.log("test");
			});

			//$(".fpd-sidebar").css("height", windowHeight);
			

			/*
			$(window).bind('resize', function(e)
			{
				windowHeight = $(document).height();
				alert(windowHeight);
				$(".fpd-sidebar").css("height", windowHeight);
			});
			*/

			//create an image
			$('#image-button').click(function(){
				var deleteSelectedObject = document.getElementById('border-dash');
				console.log(deleteSelectedObject);
				//var image = yourDesigner.createImage();
				return false;
			});

			//create a pdf with jsPDF
			$('#pdf-button').click(function(){
				var image = new Image();
				image.src = yourDesigner.getProductDataURL('jpeg');
				image.onload = function() {
					var doc = new jsPDF();
					doc.addImage(this.src, 'JPEG', 0, 0, this.width * 0.2, this.height * 0.2);
					doc.save('Product.pdf');
				}
				return false;
			});

			//checkout button with getProduct()
			$('#checkout-button').click(function(){
				var product = yourDesigner.getProduct();
				console.log(product);
				return false;
			});

			//event handler when the price is changing
			$('#clothing-designer')
			.bind('priceChange', function(evt, price, currentPrice) {
				console.log(currentPrice)
				$('#current-price').text(currentPrice);
			});

			//recreate button
			$('#recreation-button').click(function(){
				var fabricJSON = JSON.stringify(yourDesigner.getFabricJSON());
				$('#recreation-form input:first').val(fabricJSON).parent().submit();
				return false;
			});

			//click handler for input upload
			$('#upload-button').click(function(){
				$('#design-upload').click();
				return false;
			});

			//save image on webserver
			$('#save-image-php').click(function() {
				$.post( "php/save_image.php", { base64_image: yourDesigner.getProductDataURL()} );
			});

			//send image via mail
			$('#send-image-mail-php').click(function() {
				$.post( "php/send_image_via_mail.php", { base64_image: yourDesigner.getProductDataURL()} );
			});

			$('.add-to-cart-btn').on('click', function(e){
				console.log('hi')
				$.blockUI({ css: { 
		            border: 'none', 
		            padding: '15px', 
		            backgroundColor: '#000', 
		            '-webkit-border-radius': '10px', 
		            '-moz-border-radius': '10px', 
		            opacity: .5, 
		            color: '#fff' 
		        } }); 
			});

			//upload image
			// document.getElementById('design-upload').onchange = function (e) {
			// 	if(window.FileReader) {
			// 		var reader = new FileReader();
			//     	reader.readAsDataURL(e.target.files[0]);
			//     	reader.onload = function (e) {

			//     		var image = new Image;
			//     		image.src = e.target.result;
			//     		image.onload = function() {
			// 	    		var maxH = 400,
			//     				maxW = 300,
			//     				imageH = this.height,
			//     				imageW = this.width,
			//     				scaling = 1;

			// 				if(imageW > imageH) {
			// 					if(imageW > maxW) { scaling = maxW / imageW; }
			// 				}
			// 				else {
			// 					if(imageH > maxH) { scaling = maxH / imageH; }
			// 				}

			// 	    		yourDesigner.addElement('image', e.target.result, 'my custom design', {colors: $('#colorizable').is(':checked') ? '#000000' : false, zChangeable: true, removable: true, draggable: true, resizable: true, rotatable: true, autoCenter: true, boundingBox: "Base", scale: scaling});
			//     		};
			// 		};
			// 	}
			// 	else {
			// 		alert('FileReader API is not supported in your browser, please use Firefox, Safari, Chrome or IE10!')
			// 	}
			// };
	    });
    </script>
    </head>

    <body>
    	<div id="main-container">
          	<div id="clothing-designer">
          		<!-- MENS STAPLE -->
				<div class="fpd-male-product" title="Staple Tee" data-thumbnail="images/shirtbuilder-templates/mens-staple/mens-staple-front-preview.png">
	    			<img src="images/shirtbuilder-templates/mens-staple/mens-staple-front-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  		<img src="images/shirtbuilder-templates/mens-staple/mens-staple-front-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": ["#3093d1","#6d7d59","#474340","#10100e","#204892","#7c3230","#666b6f","#4a2c1a","#244333","#cccfd4","#1a793d","#f1ef9b","#acaea9","#042c44","#f0783d","#372e79","#bb2040","#28b297","#ffffff"], "sizes": ["Small", "Medium", "Large", "X-Large", "2XL"], "price": 34}' />
			  		<img src="images/shirtbuilder-templates/mens-staple/mens-staple-front-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
			  		

			  		<!-- <span title="Any Text" data-parameters='{"boundingBox": "border", "x": 326, "y": 232, "zChangeable": true, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span> -->
			  		<div class="fpd-male-product" title="Staple Back" data-thumbnail="images/shirtbuilder-templates/mens-staple/mens-staple-back-preview.png">
		    			<img src="images/shirtbuilder-templates/mens-staple/mens-staple-back-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  			<img src="images/shirtbuilder-templates/mens-staple/mens-staple-back-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": "Base", "sizes": ["Small", "Medium", "Large", "X-Large", "2XL"], "price": 6}' />
			  			<img src="images/shirtbuilder-templates/mens-staple/mens-staple-back-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
					</div>
				</div>

          		<!-- MENS STANDARD -->
          		<div class="fpd-male-product" title="Standard Tee" data-thumbnail="images/shirtbuilder-templates/mens-standard/mens-standard-front-preview.png">
	    			<img src="images/shirtbuilder-templates/mens-standard/mens-standard-front-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  		<img src="images/shirtbuilder-templates/mens-standard/mens-standard-front-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": ["#000000","#ffffff"], "sizes": ["Small", "Medium", "Large", "X-Large", "2XL"], "price": 29}' />
			  		<img src="images/shirtbuilder-templates/mens-standard/mens-standard-front-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
			  		

			  		<!-- <span title="Any Text" data-parameters='{"boundingBox": "border", "x": 326, "y": 232, "zChangeable": true, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span> -->
			  		<div class="fpd-male-product" title="Standard Back" data-thumbnail="images/shirtbuilder-templates/mens-standard/mens-standard-back-preview.png">
		    			<img src="images/shirtbuilder-templates/mens-standard/mens-standard-back-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  			<img src="images/shirtbuilder-templates/mens-standard/mens-standard-back-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": "Base", "sizes": ["Small", "Medium", "Large", "X-Large", "2XL"], "price": 6}' />
			  			<img src="images/shirtbuilder-templates/mens-standard/mens-standard-back-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
					</div>
				</div>
				

				<!-- MENS LOWDOWN -->
				<div class="fpd-male-product" title="Lowdown Singlet" data-thumbnail="images/shirtbuilder-templates/mens-lowdown/mens-lowdown-front-preview.png">
	    			<img src="images/shirtbuilder-templates/mens-lowdown/mens-lowdown-front-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  		<img src="images/shirtbuilder-templates/mens-lowdown/mens-lowdown-front-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": ["#474340","#10100e","#042c44","#bb2040","#ffffff"], "sizes": ["Small", "Medium", "Large", "X-Large", "2XL"], "price": 34}' />
			  		<img src="images/shirtbuilder-templates/mens-lowdown/mens-lowdown-front-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
			  		

			  		<!-- <span title="Any Text" data-parameters='{"boundingBox": "border", "x": 326, "y": 232, "zChangeable": true, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span> -->
			  		<div class="fpd-male-product" title="Lowdown Back" data-thumbnail="images/shirtbuilder-templates/mens-lowdown/mens-lowdown-back-preview.png">
		    			<img src="images/shirtbuilder-templates/mens-lowdown/mens-lowdown-back-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  			<img src="images/shirtbuilder-templates/mens-lowdown/mens-lowdown-back-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": "Base", "sizes": ["Small", "Medium", "Large", "X-Large", "2XL"], "price": 6}' />
			  			<img src="images/shirtbuilder-templates/mens-lowdown/mens-lowdown-back-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
					</div>
				</div>



				<!-- MENS BARNARD -->
				<div class="fpd-male-product" title="Barnard Tank" data-thumbnail="images/shirtbuilder-templates/mens-barnard/mens-barnard-front-preview.png">
	    			<img src="images/shirtbuilder-templates/mens-barnard/mens-barnard-front-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  		<img src="images/shirtbuilder-templates/mens-barnard/mens-barnard-front-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": ["#10100e","#444243","#cccfd4","#042c44","#f2e8c9","#ffffff"], "sizes": ["X-Small", "Small", "Medium", "Large", "X-Large", "2XL"], "price": 34}' />
			  		<img src="images/shirtbuilder-templates/mens-barnard/mens-barnard-front-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
			  		

			  		<!-- <span title="Any Text" data-parameters='{"boundingBox": "border", "x": 326, "y": 232, "zChangeable": true, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span> -->
			  		<div class="fpd-male-product" title="Barnard Back" data-thumbnail="images/shirtbuilder-templates/mens-barnard/mens-barnard-back-preview.png">
		    			<img src="images/shirtbuilder-templates/mens-barnard/mens-barnard-back-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  			<img src="images/shirtbuilder-templates/mens-barnard/mens-barnard-back-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": "Base", "sizes": ["X-Small", "Small", "Medium", "Large", "X-Large", "2XL"], "price": 6}' />
			  			<img src="images/shirtbuilder-templates/mens-barnard/mens-barnard-back-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
					</div>
				</div>

				<!-- MENS TALL -->
				<div class="fpd-male-product" title="Tall Tee" data-thumbnail="images/shirtbuilder-templates/mens-tall/mens-tall-front-preview.png">
	    			<img src="images/shirtbuilder-templates/mens-tall/mens-tall-front-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  		<img src="images/shirtbuilder-templates/mens-tall/mens-tall-front-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": ["#474340","#10100e","#cccfd4","#ffffff"], "sizes": ["Small", "Medium", "Large", "X-Large", "2XL"], "price": 39}' />
			  		<img src="images/shirtbuilder-templates/mens-tall/mens-tall-front-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
			  		

			  		<!-- <span title="Any Text" data-parameters='{"boundingBox": "border", "x": 326, "y": 232, "zChangeable": true, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span> -->
			  		<div class="fpd-male-product" title="Tall Back" data-thumbnail="images/shirtbuilder-templates/mens-tall/mens-tall-back-preview.png">
		    			<img src="images/shirtbuilder-templates/mens-tall/mens-tall-back-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  			<img src="images/shirtbuilder-templates/mens-tall/mens-tall-back-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors":"Base", "sizes": ["Small", "Medium", "Large", "X-Large", "2XL"], "price": 6}' />
			  			<img src="images/shirtbuilder-templates/mens-tall/mens-tall-back-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
					</div>
				</div>

				<!-- WOMENS STANDARD -->
				<div class="fpd-female-product" title="Standard Tee" data-thumbnail="images/shirtbuilder-templates/womens-standard/womens-standard-front-preview.png">
	    			<img src="images/shirtbuilder-templates/womens-standard/womens-standard-front-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  		<img src="images/shirtbuilder-templates/womens-standard/womens-standard-front-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": ["#000","#fff"], "sizes": ["Small", "Medium", "Large", "X-Large", "2XL"], "price": 29}' />
			  		<img src="images/shirtbuilder-templates/womens-standard/womens-standard-front-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
			  		

			  		<!-- <span title="Any Text" data-parameters='{"boundingBox": "border", "x": 326, "y": 232, "zChangeable": true, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span> -->
			  		<div class="fpd-female-product" title="Standard Back" data-thumbnail="images/shirtbuilder-templates/womens-standard/womens-standard-back-preview.png">
		    			<img src="images/shirtbuilder-templates/womens-standard/womens-standard-back-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  			<img src="images/shirtbuilder-templates/womens-standard/womens-standard-back-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": "Base", "sizes": ["Small", "Medium", "Large", "X-Large", "2XL"], "price": 6}' />
			  			<img src="images/shirtbuilder-templates/womens-standard/womens-standard-back-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
					</div>
				</div>

				<!-- WOMENS TANKTEE -->
				<div class="fpd-female-product" title="Tank Tee" data-thumbnail="images/shirtbuilder-templates/womens-tanktee/womens-tanktee-front-preview.png">
	    			<img src="images/shirtbuilder-templates/womens-tanktee/womens-tanktee-front-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  		<img src="images/shirtbuilder-templates/womens-tanktee/womens-tanktee-front-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": ["#10100e","#666b6f","#ffffff"], "sizes": ["X-Small", "Small", "Medium", "Large", "2XL"], "price": 34}' />
			  		<img src="images/shirtbuilder-templates/womens-tanktee/womens-tanktee-front-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
			  		

			  		<!-- <span title="Any Text" data-parameters='{"boundingBox": "border", "x": 326, "y": 232, "zChangeable": true, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span> -->
			  		<div class="fpd-female-product" title="Tank Tee Back" data-thumbnail="images/shirtbuilder-templates/womens-tanktee/womens-tanktee-back-preview.png">
		    			<img src="images/shirtbuilder-templates/womens-tanktee/womens-tanktee-back-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  			<img src="images/shirtbuilder-templates/womens-tanktee/womens-tanktee-back-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": "Base", "sizes": ["X-Small", "Small", "Medium", "Large", "2XL"], "price": 6}' />
			  			<img src="images/shirtbuilder-templates/womens-tanktee/womens-tanktee-back-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
					</div>
				</div>

				<!-- WOMENS MALI -->
				<div class="fpd-female-product" title="Mali Tee" data-thumbnail="images/shirtbuilder-templates/womens-mali/womens-mali-front-preview.png">
	    			<img src="images/shirtbuilder-templates/womens-mali/womens-mali-front-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  		<img src="images/shirtbuilder-templates/womens-mali/womens-mali-front-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": ["#6d7d59","#10100e","#7c3230","#444243","#cccfd4","#82abce","#68b8a1","#0f4468","#042c44","#f2e8c9","#ffffff"], "sizes": ["X-Small", "Small", "Medium", "Large", "X-Large", "2XL"], "price": 34}' />
			  		<img src="images/shirtbuilder-templates/womens-mali/womens-mali-front-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
			  		

			  		<!-- <span title="Any Text" data-parameters='{"boundingBox": "border", "x": 326, "y": 232, "zChangeable": true, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span> -->
			  		<div class="fpd-female-product" title="Mali Back" data-thumbnail="images/shirtbuilder-templates/womens-mali/womens-mali-back-preview.png">
		    			<img src="images/shirtbuilder-templates/womens-mali/womens-mali-back-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  			<img src="images/shirtbuilder-templates/womens-mali/womens-mali-back-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors":"Base", "sizes": ["X-Small", "Small", "Medium", "Large", "X-Large", "2XL"], "price": 6}' />
			  			<img src="images/shirtbuilder-templates/womens-mali/womens-mali-back-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
					</div>
				</div>

				<!-- WOMENS DASH RACERBACK -->
				<div class="fpd-female-product" title="Dash Racerback Singlet" data-thumbnail="images/shirtbuilder-templates/womens-dashracerback/womens-dashracerback-front-preview.png">
	    			<img src="images/shirtbuilder-templates/womens-dashracerback/womens-dashracerback-front-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  		<img src="images/shirtbuilder-templates/womens-dashracerback/womens-dashracerback-front-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": ["#10100e","#7c3230","#cccfd4","#ffffff"], "sizes": ["X-Small", "Small", "Medium", "Large", "X-Large", "2XL"], "price": 34}' />
			  		<img src="images/shirtbuilder-templates/womens-dashracerback/womens-dashracerback-front-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
			  		

			  		<!-- <span title="Any Text" data-parameters='{"boundingBox": "border", "x": 326, "y": 232, "zChangeable": true, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span> -->
			  		<div class="fpd-female-product" title="Dash Racerback Back" data-thumbnail="images/shirtbuilder-templates/womens-dashracerback/womens-dashracerback-back-preview.png">
		    			<img src="images/shirtbuilder-templates/womens-dashracerback/womens-dashracerback-back-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  			<img src="images/shirtbuilder-templates/womens-dashracerback/womens-dashracerback-back-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors":"Base", "sizes": ["X-Small", "Small", "Medium", "Large", "X-Large", "2XL"], "price": 6}' />
			  			<img src="images/shirtbuilder-templates/womens-dashracerback/womens-dashracerback-back-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
					</div>
				</div>

				<!-- KIDS TEE -->
				<div class="fpd-kids-product" title="Kids Tee" data-thumbnail="images/shirtbuilder-templates/kids-tee/kids-tee-front-preview.png">
	    			<img src="images/shirtbuilder-templates/kids-tee/kids-tee-front-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  		<img src="images/shirtbuilder-templates/kids-tee/kids-tee-front-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": ["#10100e","#204892","#1a793d","#efb9cc","#bb2040","#ffffff"], "sizes": ["kids 2", "kids 4", "kids 6", "kids 8", "kids 10", "kids 12", "kids 14"], "price": 20}' />
			  		<img src="images/shirtbuilder-templates/kids-tee/kids-tee-front-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
			  		
			  		<div class="fpd-kids-product" title="Kids Tee Back" data-thumbnail="images/shirtbuilder-templates/kids-tee/kids-tee-back-preview.png">
		    			<img src="images/shirtbuilder-templates/kids-tee/kids-tee-back-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  			<img src="images/shirtbuilder-templates/kids-tee/kids-tee-back-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors":"Base", "sizes": ["kids 2", "kids 4", "kids 6", "kids 8", "kids 10", "kids 12", "kids 14"], "price": 6}' />
			  			<img src="images/shirtbuilder-templates/kids-tee/kids-tee-back-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
					</div>
				</div>
				
				<!-- KIDS MINI -->
				<div class="fpd-kids-product" title="Kids Mini" data-thumbnail="images/shirtbuilder-templates/kids-mini/kids-mini-front-preview.png">
	    			<img src="images/shirtbuilder-templates/kids-mini/kids-mini-front-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  		<img src="images/shirtbuilder-templates/kids-mini/kids-mini-front-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": ["#efb9cc","#a2cde8"], "sizes": ["0-3 Months", "3-6 Months", "6-12 Months", "12-8 Months", "18-24 Months"], "price": 20}' />
			  		<img src="images/shirtbuilder-templates/kids-mini/kids-mini-front-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
			  		
			  		<div class="fpd-kids-product" title="Kids Mini Back" data-thumbnail="images/shirtbuilder-templates/kids-mini/kids-mini-back-preview.png">
		    			<img src="images/shirtbuilder-templates/kids-mini/kids-mini-back-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  			<img src="images/shirtbuilder-templates/kids-mini/kids-mini-back-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors":"Base", "sizes": ["0-3 Months", "3-6 Months", "6-12 Months", "12-8 Months", "18-24 Months"], "price": 6}' />
			  			<img src="images/shirtbuilder-templates/kids-mini/kids-mini-back-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
					</div>
				</div>
				
				<!-- DESIGNS -->
		  		<div class="fpd-design">
		  			<div class="fpd-category" title="Animals">
			  			<img src="images/stockart/animals/animals_bear.svg" title="Bear" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  		
				  	</div>
				  	
		  			<div class="fpd-category" title="Icons">
			  			<img src="images/stockart/icons/icons_award.svg" title="Award" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  		<img src="images/stockart/icons/icons_battery.svg" title="Battery" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  		<img src="images/stockart/icons/icons_location.svg" title="Location" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  		<img src="images/stockart/icons/icons_robot.svg" title="robot" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  		<img src="images/stockart/icons/icons_shield.svg" title="shield" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  		<img src="images/stockart/icons/icons_sound.svg" title="sound" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  		<img src="images/stockart/icons/icons_tools.svg" title="tools" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
		  			</div>
		  			<div class="fpd-category" title="Decorative">
			  			<img src="images/stockart/decorative/decorative_1.svg" title="Decorative1" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  		<img src="images/stockart/decorative/decorative_2.svg" title="Decorative2" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  		<img src="images/stockart/decorative/decorative_3.svg" title="Decorative3" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  		<img src="images/stockart/decorative/decorative_4.svg" title="Decorative4" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  		<img src="images/stockart/decorative/decorative_5.svg" title="Decorative5" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  		<img src="images/stockart/decorative/decorative_6.svg" title="Decorative6" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  		<img src="images/stockart/decorative/decorative_7.svg" title="Decorative7" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  		<img src="images/stockart/decorative/decorative_8.svg" title="Decorative8" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  	</div>
				  	<div class="fpd-category" title="Food">
			  			<img src="images/stockart/food/food-10.svg" title="Bottle" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  		<img src="images/stockart/food/food_fish.svg" title="Fish" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
					  	<img src="images/stockart/food/food_ham.svg" title="Ham" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
					  	<img src="images/stockart/food/food_lemon.svg" title="Lemon" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
					  	<img src="images/stockart/food/food_noodles.svg" title="Noodles" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
					  	<img src="images/stockart/food/food_pear.svg" title="Pear" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
					  	<img src="images/stockart/food/food_pork.svg" title="Pork" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
					  	<img src="images/stockart/food/food_sausage.svg" title="Sausage" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
					  	<img src="images/stockart/food/food_wine.svg" title="Wine" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
					  	<img src="images/stockart/food/food_yummy.svg" title="Yummy" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  	</div>
				  	<div class="fpd-category" title="Music">
			  			<img src="images/stockart/music/music_disco.svg" title="Disco" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
			  			<img src="images/stockart/music/music_drum.svg" title="Drum" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
			  			<img src="images/stockart/music/music_guitar.svg" title="Guitar" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
						<img src="images/stockart/music/music_lute.svg" title="Lute" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
						<img src="images/stockart/music/music_note.svg" title="Note" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
						<img src="images/stockart/music/music_saxophone.svg" title="Saxophone" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
						<img src="images/stockart/music/music_stereo.svg" title="Stereo" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
						<img src="images/stockart/music/music_tape.svg" title="Tape" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  	</div>
				  	<div class="fpd-category" title="Nature">
			  			<img src="images/stockart/nature/nature_bamboo.svg" title="Bamboo" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
			  			<img src="images/stockart/nature/nature_cactus.svg" title="Cactus" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
			  			<img src="images/stockart/nature/nature_flower.svg" title="Flower" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
			  			<img src="images/stockart/nature/nature_leaf.svg" title="Leaf" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
			  			<img src="images/stockart/nature/nature_mountain.svg" title="Mountain" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
			  			<img src="images/stockart/nature/nature_palm.svg" title="Palm" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
			  			<img src="images/stockart/nature/nature_tree.svg" title="Tree" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
			  		</div>
			  		<div class="fpd-category" title="Occasion">
			  			<img src="images/stockart/occasion/Occasion_bunny.svg" title="Bunny" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  		<img src="images/stockart/occasion/Occasion_bunny2.svg" title="Bunny2" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  		<img src="images/stockart/occasion/Occasion_candycane.svg" title="Candy Cane" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  		<img src="images/stockart/occasion/Occasion_egg.svg" title="Egg" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  		<img src="images/stockart/occasion/Occasion_holly.svg" title="Holly" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  		<img src="images/stockart/occasion/Occasion_santa.svg" title="Santa" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  		<img src="images/stockart/occasion/Occasion_snowman.svg" title="Snowman" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  		<img src="images/stockart/occasion/Occasion_tree.svg" title="Tree" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
			  		</div>
			  		<div class="fpd-category" title="Sports">
			  			<img src="images/stockart/sport/sport_Baseball.svg" title="Baseball" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  		<img src="images/stockart/sport/sport_Basketball.svg" title="Basketball" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
					  	<img src="images/stockart/sport/sport_Bike.svg" title="Bike" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
					  	<img src="images/stockart/sport/sport_Bowling.svg" title="Bowling" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
					  	<img src="images/stockart/sport/sport_Football.svg" title="Football" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
					  	<img src="images/stockart/sport/sport_MartialArts.svg" title="MartialArts" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
					  	<img src="images/stockart/sport/sport_Swimming.svg" title="Swimming" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
					  	<img src="images/stockart/sport/sport_weights.svg" title="Weights" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 0, "boundingBox": {"height": 250, "width": 150, "x": 325, "y": 300}, "autoCenter": true, "stockart": true}' />
				  	</div>

		  		</div>
		  	</div>
		  	

    	</div>

    	<div id="preloader">
	        <div id="status">
	          <img src="http://instathreds.dev/images/preloader.gif">        
          	</div>
	    </div>
    </body>
</html>