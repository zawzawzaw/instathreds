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
				$('#thsirt-price').text(currentPrice);
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
          		<!-- MENS STANDARD -->
          		<div class="fpd-male-product" title="Standard" data-thumbnail="images/shirtbuilder-templates/mens-standard/mens-standard-front-preview.png">
	    			<img src="images/shirtbuilder-templates/mens-standard/mens-standard-front-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  		<img src="images/shirtbuilder-templates/mens-standard/mens-standard-front-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": ["#000","#fff","#51bc18","#e83fd4","#006837","#29abe2","#ff2500","#fcee20"], "price": 20}' />
			  		<img src="images/shirtbuilder-templates/mens-standard/mens-standard-front-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
			  		

			  		<!-- <span title="Any Text" data-parameters='{"boundingBox": "border", "x": 326, "y": 232, "zChangeable": true, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span> -->
			  		<div class="fpd-male-product" title="Standard Back" data-thumbnail="images/shirtbuilder-templates/mens-standard/mens-standard-back-preview.png">
		    			<img src="images/shirtbuilder-templates/mens-standard/mens-standard-back-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  			<img src="images/shirtbuilder-templates/mens-standard/mens-standard-back-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": "Base", "price": 20}' />
			  			<img src="images/shirtbuilder-templates/mens-standard/mens-standard-back-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
					</div>
				</div>

				<!-- MENS STAPLE -->
				<div class="fpd-male-product" title="Staple" data-thumbnail="images/shirtbuilder-templates/mens-staple/mens-staple-front-preview.png">
	    			<img src="images/shirtbuilder-templates/mens-staple/mens-staple-front-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  		<img src="images/shirtbuilder-templates/mens-staple/mens-staple-front-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": ["#000","#fff","#51bc18","#e83fd4","#006837","#29abe2","#ff2500","#fcee20"], "price": 20}' />
			  		<img src="images/shirtbuilder-templates/mens-staple/mens-staple-front-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
			  		

			  		<!-- <span title="Any Text" data-parameters='{"boundingBox": "border", "x": 326, "y": 232, "zChangeable": true, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span> -->
			  		<div class="fpd-male-product" title="Staple Back" data-thumbnail="images/shirtbuilder-templates/mens-staple/mens-staple-back-preview.png">
		    			<img src="images/shirtbuilder-templates/mens-staple/mens-staple-back-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  			<img src="images/shirtbuilder-templates/mens-staple/mens-staple-back-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": "Base", "price": 20}' />
			  			<img src="images/shirtbuilder-templates/mens-staple/mens-staple-back-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
					</div>
				</div>

				<!-- MENS LOWDOWN -->
				<div class="fpd-male-product" title="Lowdown" data-thumbnail="images/shirtbuilder-templates/mens-lowdown/mens-lowdown-front-preview.png">
	    			<img src="images/shirtbuilder-templates/mens-lowdown/mens-lowdown-front-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  		<img src="images/shirtbuilder-templates/mens-lowdown/mens-lowdown-front-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": ["#000","#fff","#51bc18","#e83fd4","#006837","#29abe2","#ff2500","#fcee20"], "price": 20}' />
			  		<img src="images/shirtbuilder-templates/mens-lowdown/mens-lowdown-front-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
			  		

			  		<!-- <span title="Any Text" data-parameters='{"boundingBox": "border", "x": 326, "y": 232, "zChangeable": true, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span> -->
			  		<div class="fpd-male-product" title="Lowdown Back" data-thumbnail="images/shirtbuilder-templates/mens-lowdown/mens-lowdown-back-preview.png">
		    			<img src="images/shirtbuilder-templates/mens-lowdown/mens-lowdown-back-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  			<img src="images/shirtbuilder-templates/mens-lowdown/mens-lowdown-back-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": "Base", "price": 20}' />
			  			<img src="images/shirtbuilder-templates/mens-lowdown/mens-lowdown-back-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
					</div>
				</div>

				<!-- MENS BARNARD -->
				<div class="fpd-male-product" title="Barnard" data-thumbnail="images/shirtbuilder-templates/mens-barnard/mens-barnard-front-preview.png">
	    			<img src="images/shirtbuilder-templates/mens-barnard/mens-barnard-front-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  		<img src="images/shirtbuilder-templates/mens-barnard/mens-barnard-front-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": ["#000","#fff","#51bc18","#e83fd4","#006837","#29abe2","#ff2500","#fcee20"], "price": 20}' />
			  		<img src="images/shirtbuilder-templates/mens-barnard/mens-barnard-front-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
			  		

			  		<!-- <span title="Any Text" data-parameters='{"boundingBox": "border", "x": 326, "y": 232, "zChangeable": true, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span> -->
			  		<div class="fpd-male-product" title="Barnard Back" data-thumbnail="images/shirtbuilder-templates/mens-barnard/mens-barnard-back-preview.png">
		    			<img src="images/shirtbuilder-templates/mens-barnard/mens-barnard-back-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  			<img src="images/shirtbuilder-templates/mens-barnard/mens-barnard-back-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": "Base", "price": 20}' />
			  			<img src="images/shirtbuilder-templates/mens-barnard/mens-barnard-back-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
					</div>
				</div>

				<!-- MENS TALL -->
				<div class="fpd-male-product" title="Tall" data-thumbnail="images/shirtbuilder-templates/mens-tall/mens-tall-front-preview.png">
	    			<img src="images/shirtbuilder-templates/mens-tall/mens-tall-front-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  		<img src="images/shirtbuilder-templates/mens-tall/mens-tall-front-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": ["#000","#fff","#51bc18","#e83fd4","#006837","#29abe2","#ff2500","#fcee20"], "price": 20}' />
			  		<img src="images/shirtbuilder-templates/mens-tall/mens-tall-front-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
			  		

			  		<!-- <span title="Any Text" data-parameters='{"boundingBox": "border", "x": 326, "y": 232, "zChangeable": true, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span> -->
			  		<div class="fpd-male-product" title="Tall Back" data-thumbnail="images/shirtbuilder-templates/mens-tall/mens-tall-back-preview.png">
		    			<img src="images/shirtbuilder-templates/mens-tall/mens-tall-back-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  			<img src="images/shirtbuilder-templates/mens-tall/mens-tall-back-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": "Base", "price": 20}' />
			  			<img src="images/shirtbuilder-templates/mens-tall/mens-tall-back-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
					</div>
				</div>

				<!-- WOMENS STANDARD -->
				<div class="fpd-female-product" title="Standard" data-thumbnail="images/shirtbuilder-templates/womens-standard/womens-standard-front-preview.png">
	    			<img src="images/shirtbuilder-templates/womens-standard/womens-standard-front-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  		<img src="images/shirtbuilder-templates/womens-standard/womens-standard-front-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": ["#000","#fff","#51bc18","#e83fd4","#006837","#29abe2","#ff2500","#fcee20"], "price": 20}' />
			  		<img src="images/shirtbuilder-templates/womens-standard/womens-standard-front-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
			  		

			  		<!-- <span title="Any Text" data-parameters='{"boundingBox": "border", "x": 326, "y": 232, "zChangeable": true, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span> -->
			  		<div class="fpd-female-product" title="Standard Back" data-thumbnail="images/shirtbuilder-templates/womens-standard/womens-standard-back-preview.png">
		    			<img src="images/shirtbuilder-templates/womens-standard/womens-standard-back-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  			<img src="images/shirtbuilder-templates/womens-standard/womens-standard-back-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": "Base", "price": 20}' />
			  			<img src="images/shirtbuilder-templates/womens-standard/womens-standard-back-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
					</div>
				</div>

				<!-- WOMENS TANKTEE -->
				<div class="fpd-female-product" title="Tank Tee" data-thumbnail="images/shirtbuilder-templates/womens-tanktee/womens-tanktee-front-preview.png">
	    			<img src="images/shirtbuilder-templates/womens-tanktee/womens-tanktee-front-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  		<img src="images/shirtbuilder-templates/womens-tanktee/womens-tanktee-front-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": ["#000","#fff","#51bc18","#e83fd4","#006837","#29abe2","#ff2500","#fcee20"], "price": 20}' />
			  		<img src="images/shirtbuilder-templates/womens-tanktee/womens-tanktee-front-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
			  		

			  		<!-- <span title="Any Text" data-parameters='{"boundingBox": "border", "x": 326, "y": 232, "zChangeable": true, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span> -->
			  		<div class="fpd-female-product" title="Tank Tee Back" data-thumbnail="images/shirtbuilder-templates/womens-tanktee/womens-tanktee-back-preview.png">
		    			<img src="images/shirtbuilder-templates/womens-tanktee/womens-tanktee-back-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  			<img src="images/shirtbuilder-templates/womens-tanktee/womens-tanktee-back-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": "Base", "price": 20}' />
			  			<img src="images/shirtbuilder-templates/womens-tanktee/womens-tanktee-back-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
					</div>
				</div>

				<!-- WOMENS MALI -->
				<div class="fpd-female-product" title="Mali" data-thumbnail="images/shirtbuilder-templates/womens-mali/womens-mali-front-preview.png">
	    			<img src="images/shirtbuilder-templates/womens-mali/womens-mali-front-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  		<img src="images/shirtbuilder-templates/womens-mali/womens-mali-front-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": ["#000","#fff","#51bc18","#e83fd4","#006837","#29abe2","#ff2500","#fcee20"], "price": 20}' />
			  		<img src="images/shirtbuilder-templates/womens-mali/womens-mali-front-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
			  		

			  		<!-- <span title="Any Text" data-parameters='{"boundingBox": "border", "x": 326, "y": 232, "zChangeable": true, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span> -->
			  		<div class="fpd-female-product" title="Mali Back" data-thumbnail="images/shirtbuilder-templates/womens-mali/womens-mali-back-preview.png">
		    			<img src="images/shirtbuilder-templates/womens-mali/womens-mali-back-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  			<img src="images/shirtbuilder-templates/womens-mali/womens-mali-back-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": "Base", "price": 20}' />
			  			<img src="images/shirtbuilder-templates/womens-mali/womens-mali-back-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
					</div>
				</div>

				<!-- WOMENS DASH RACERBACK -->
				<div class="fpd-female-product" title="Dash Racerback" data-thumbnail="images/shirtbuilder-templates/womens-dashracerback/womens-dashracerback-front-preview.png">
	    			<img src="images/shirtbuilder-templates/womens-dashracerback/womens-dashracerback-front-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  		<img src="images/shirtbuilder-templates/womens-dashracerback/womens-dashracerback-front-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": ["#000","#fff","#51bc18","#e83fd4","#006837","#29abe2","#ff2500","#fcee20"], "price": 20}' />
			  		<img src="images/shirtbuilder-templates/womens-dashracerback/womens-dashracerback-front-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
			  		

			  		<!-- <span title="Any Text" data-parameters='{"boundingBox": "border", "x": 326, "y": 232, "zChangeable": true, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span> -->
			  		<div class="fpd-female-product" title="Dash Racerback Back" data-thumbnail="images/shirtbuilder-templates/womens-dashracerback/womens-dashracerback-back-preview.png">
		    			<img src="images/shirtbuilder-templates/womens-dashracerback/womens-dashracerback-back-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  			<img src="images/shirtbuilder-templates/womens-dashracerback/womens-dashracerback-back-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": "Base", "price": 20}' />
			  			<img src="images/shirtbuilder-templates/womens-dashracerback/womens-dashracerback-back-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
					</div>
				</div>

				<!-- KIDS TEE -->
				<!--
				<div class="fpd-kids-product" title="Kids Tee" data-thumbnail="images/shirtbuilder-templates/kids-tee/kids-tee-front-preview.png">
	    			<img src="images/shirtbuilder-templates/kids-tee/kids-tee-front-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  		<img src="images/shirtbuilder-templates/kids-tee/kids-tee-front-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": ["#000","#fff","#51bc18","#e83fd4","#006837","#29abe2","#ff2500","#fcee20"], "price": 20}' />
			  		<img src="images/shirtbuilder-templates/kids-tee/kids-tee-front-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
			  		

			  		<div class="fpd-kids-product" title="Kids Tee Back" data-thumbnail="images/shirtbuilder-templates/kids-tee/kids-tee-back-preview.png">
		    			<img src="images/shirtbuilder-templates/kids-tee/kids-tee-back-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  			<img src="images/shirtbuilder-templates/kids-tee/kids-tee-back-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": "Base", "price": 20}' />
			  			<img src="images/shirtbuilder-templates/kids-tee/kids-tee-back-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
					</div>
				</div>
				-->

				<!-- KIDS MINI -->
				<!--
				<div class="fpd-kids-product" title="Kids Mini" data-thumbnail="images/shirtbuilder-templates/kids-mini/kids-mini-front-preview.png">
	    			<img src="images/shirtbuilder-templates/kids-mini/kids-mini-front-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  		<img src="images/shirtbuilder-templates/kids-mini/kids-mini-front-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": ["#000","#fff","#51bc18","#e83fd4","#006837","#29abe2","#ff2500","#fcee20"], "price": 20}' />
			  		<img src="images/shirtbuilder-templates/kids-mini/kids-mini-front-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
			  		

			  		<div class="fpd-kids-product" title="Kids Mini Back" data-thumbnail="images/shirtbuilder-templates/kids-mini/kids-mini-back-preview.png">
		    			<img src="images/shirtbuilder-templates/kids-mini/kids-mini-back-body.png" title="Body" data-parameters='{"x": 325, "y": 329}' />
			  			<img src="images/shirtbuilder-templates/kids-mini/kids-mini-back-base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": "Base", "price": 20}' />
			  			<img src="images/shirtbuilder-templates/kids-mini/kids-mini-back-shadow.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
					</div>
				</div>
				
				-->
          		
				<!-- DESIGNS -->
		  		<div class="fpd-design">
		  			<div class="fpd-category" title="Swirls">
			  			<img src="images/designs/swirl.png" title="Swirl" data-parameters='{"zChangeable": false, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 10,"autoCenter": true}' />
				  		<img src="images/designs/swirl2.png" title="Swirl 2" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 5, "boundingBox": "Base", "autoCenter": true}' />
				  		<img src="images/designs/swirl3.png" title="Swirl 3" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "autoCenter": true}' />
				  		<img src="images/designs/heart_blur.png" title="Heart Blur" data-parameters='{"x": 215, "y": 200, "colors": "#bf0200", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 5, "boundingBox": "Base", "autoCenter": true}' />
				  		<img src="images/designs/converse.png" title="Converse" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "autoCenter": true}' />
				  		<img src="images/designs/crown.png" title="Crown" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "autoCenter": true}' />
				  		<img src="images/designs/men_women.png" title="Men hits Women" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "boundingBox": "Base", "autoCenter": true}' />
		  			</div>
		  			<div class="fpd-category" title="Retro">
			  			<img src="images/designs/retro_1.png" title="Retro One" data-parameters='{"x": 210, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.25, "price": 7, "boundingBox": "Base", "autoCenter": true}' />
				  		<img src="images/designs/retro_2.png" title="Retro Two" data-parameters='{"x": 193, "y": 180, "colors": "#ffffff", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.46, "boundingBox": "Base", "autoCenter": true}' />
				  		<img src="images/designs/retro_3.png" title="Retro Three" data-parameters='{"x": 240, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.25, "price": 8, "boundingBox": "Base", "autoCenter": true}' />
				  		<img src="images/designs/heart_circle.png" title="Heart Circle" data-parameters='{"x": 240, "y": 200, "colors": "#007D41", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.4, "boundingBox": "Base", "autoCenter": true}' />
				  		<img src="images/designs/swirl.png" title="Swirl" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 10, "boundingBox": "Base", "autoCenter": true}' />
				  		<img src="images/designs/swirl2.png" title="Swirl 2" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 5, "boundingBox": "Base", "autoCenter": true}' />
				  		<img src="images/designs/swirl3.png" title="Swirl 3" data-parameters='{"x": 215, "y": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true}' />
				  	</div>
		  		</div>
		  	</div>
		  	

    	</div>
    </body>
</html>