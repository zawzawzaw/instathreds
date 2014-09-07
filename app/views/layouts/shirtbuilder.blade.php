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
          		<div class="fpd-male-product" title="Shirt Front" data-thumbnail="images/white_shirt/front/preview.png">
	    			<img src="images/white_shirt/front/base.png" title="Base" data-parameters='{"x": 325, "y": 329, "colors": ["#000","#fff","#51bc18","#e83fd4","#006837","#29abe2","#ff2500","#fcee20"], "price": 20}' />
			  		<img src="images/white_shirt/front/shadows.png" title="Shadow" data-parameters='{"x": 325, "y": 329}' />
			  		<img src="images/white_shirt/front/body.png" title="Hightlights" data-parameters='{"x": 322, "y": 137}' />
			  		

			  		<!-- <span title="Any Text" data-parameters='{"boundingBox": "border", "x": 326, "y": 232, "zChangeable": true, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span> -->
			  		<div class="fpd-male-product" title="Shirt Back" data-thumbnail="images/white_shirt/back/preview.png">
		    			<img src="images/white_shirt/back/base.png" title="Base" data-parameters='{"x": 317, "y": 329, "colors": "Base", "price": 20}' />
		    			<img src="images/white_shirt/back/body.png" title="Hightlights" data-parameters='{"x": 333, "y": 119}' />
				  		<img src="images/white_shirt/back/shadows.png" title="Shadow" data-parameters='{"x": 318, "y": 329}' />
					</div>
				</div>
          		<div class="fpd-male-product" title="Sweater" data-thumbnail="images/sweater/preview.png">
	    			<img src="images/sweater/basic.png" title="Base" data-parameters='{"x": 332, "y": 311, "colors": "#D5D5D5,#990000,#cccccc", "price": 20}' />
			  		<img src="images/sweater/highlights.png" title="Hightlights" data-parameters='{"x": 332, "y": 311}' />
			  		<img src="images/sweater/shadow.png" title="Shadow" data-parameters='{"x": 332, "y": 309}' />

			  		<div class="fpd-male-product" title="Shirt Back" data-thumbnail="images/yellow_shirt/back/preview.png">
		    			<img src="images/yellow_shirt/back/base.png" title="Base" data-parameters='{"x": 317, "y": 329, "colors": "Base", "price": 20}' />
		    			<img src="images/yellow_shirt/back/body.png" title="Hightlights" data-parameters='{"x": 333, "y": 119}' />
				  		<img src="images/yellow_shirt/back/shadows.png" title="Shadow" data-parameters='{"x": 318, "y": 329}' />
					</div>
				</div>
				<div class="fpd-female-product" title="Scoop Tee" data-thumbnail="images/scoop_tee/preview.png">
	    			<img src="images/scoop_tee/basic.png" title="Base" data-parameters='{"x": 314, "y": 323, "colors": "#98937f, #000000, #ffffff", "price": 15}' />
			  		<img src="images/scoop_tee/highlights.png" title="Hightlights" data-parameters='{"x":308, "y": 316}' />
			  		<img src="images/scoop_tee/shadows.png" title="Shadow" data-parameters='{"x": 308, "y": 316}' />
			  		<img src="images/scoop_tee/label.png" title="Label" data-parameters='{"x": 314, "y": 140}' />
				</div>
				<div class="fpd-male-product" title="Hoodie" data-thumbnail="images/hoodie/preview.png">
	    			<img src="images/hoodie/basic.png" title="Base" data-parameters='{"x": 313, "y": 322, "colors": "#850b0b", "price": 40}' />
			  		<img src="images/hoodie/highlights.png" title="Hightlights" data-parameters='{"x": 311, "y": 318}' />
			  		<img src="images/hoodie/shadows.png" title="Shadow" data-parameters='{"x": 311, "y": 321}' />
			  		<img src="images/hoodie/zip.png" title="Zip" data-parameters='{"x": 303, "y": 216}' />
				</div>
				<div class="fpd-male-product" title="Shirt" data-thumbnail="images/shirt/preview.png">
	    			<img src="images/shirt/basic.png" title="Base" data-parameters='{"x": 327, "y": 313, "colors": "#6ebed5", "price": 10}' />
	    			<img src="images/shirt/collar_arms.png" title="Collars & Arms" data-parameters='{"x": 326, "y": 217, "colors": "#000000"}' />
			  		<img src="images/shirt/highlights.png" title="Hightlights" data-parameters='{"x": 330, "y": 313}' />
			  		<img src="images/shirt/shadow.png" title="Shadow" data-parameters='{"x": 327, "y": 312}' />
			  		<!-- <span title="Any Text" data-parameters='{"boundingBox": "Base", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span> -->
				</div>
				<div class="fpd-male-product" title="Short" data-thumbnail="images/shorts/preview.png">
	    			<img src="images/shorts/basic.png" title="Base" data-parameters='{"x": 317, "y": 332, "colors": "#81b5eb", "price": 15}' />
			  		<img src="images/shorts/highlights.png" title="Hightlights" data-parameters='{"x": 318, "y": 331}' />
			  		<img src="images/shorts/pullstrings.png" title="Pullstrings" data-parameters='{"x": 307, "y": 195, "colors": "#ffffff"}' />
			  		<img src="images/shorts/midtones.png" title="Midtones" data-parameters='{"x": 317, "y": 332}' />
			  		<img src="images/shorts/shadows.png" title="Shadow" data-parameters='{"x": 320, "y": 331}' />
				</div>
				<div class="fpd-male-product" title="Basecap" data-thumbnail="images/cap/preview.png">
	    			<img src="images/cap/basic.png" title="Base" data-parameters='{"x": 318, "y": 311, "colors": "#ededed", "price": 5}' />
			  		<img src="images/cap/highlights.png" title="Hightlights" data-parameters='{"x": 309, "y": 300}' />
			  		<img src="images/cap/shadows.png" title="Shadows" data-parameters='{"x": 306, "y": 299}' />
				</div>
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