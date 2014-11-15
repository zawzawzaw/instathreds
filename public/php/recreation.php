<?php

/*
 This php script receives a JSON encoded string (JSON.stringify) which is sent via $_POST. It gets the JSON encoded string from the getProduct() method.
 When using this script, you should use absolute pathes for your images or place this script in the same folder where you are using the product designer.
*/
// print_r($_POST['recreation_product']); exit();
?>

<!DOCTYPE HTML>
    <html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Fancy Product Designer - Recreation</title>

    <!-- Style sheets -->
	<link rel="stylesheet" type="text/css" href="../css/jquery.fancyProductDesigner-fonts.css" />

    <!-- Include js files -->
	<script src="../js/fabric.js" type="text/javascript"></script>

	<script type="text/javascript">

		var SCALE_FACTOR = 1;

		window.onload = function() {
			//pass the sent product from $_POST
			var recreationStage = new fabric.Canvas('recreation-canvas', {});
			var json = <?php echo stripslashes('{"objects":[{"type":"image","originX":"center","originY":"center","left":325,"top":329,"width":500,"height":460,"fill":"rgb(0,0,0)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","viewIndex":0,"src":"http://instathreds.dev/images/shirtbuilder-templates/mens-staple/mens-staple-front-body.png","filters":[],"crossOrigin":"anonymous"},{"type":"image","originX":"center","originY":"center","left":325,"top":329,"width":500,"height":460,"fill":"rgb(0,0,0)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","viewIndex":0,"src":"http://instathreds.dev/images/shirtbuilder-templates/mens-staple/mens-staple-front-base.png","filters":[{"type":"Tint","color":"#1a793d","opacity":1}],"crossOrigin":"anonymous"},{"type":"image","originX":"center","originY":"center","left":325,"top":329,"width":500,"height":460,"fill":"rgb(0,0,0)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","viewIndex":0,"src":"http://instathreds.dev/images/shirtbuilder-templates/mens-staple/mens-staple-front-shadow.png","filters":[],"crossOrigin":"anonymous"},{"type":"image","originX":"center","originY":"center","left":325,"top":329,"width":500,"height":460,"fill":"rgb(0,0,0)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":false,"clipTo":null,"backgroundColor":"","viewIndex":1,"src":"http://instathreds.dev/images/shirtbuilder-templates/mens-staple/mens-staple-back-body.png","filters":[],"crossOrigin":"anonymous"},{"type":"image","originX":"center","originY":"center","left":325,"top":329,"width":500,"height":460,"fill":"rgb(0,0,0)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":false,"clipTo":null,"backgroundColor":"","viewIndex":1,"src":"http://instathreds.dev/images/shirtbuilder-templates/mens-staple/mens-staple-back-base.png","filters":[{"type":"Tint","color":"#1a793d","opacity":1}],"crossOrigin":"anonymous"},{"type":"image","originX":"center","originY":"center","left":325,"top":329,"width":500,"height":460,"fill":"rgb(0,0,0)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":false,"clipTo":null,"backgroundColor":"","viewIndex":1,"src":"http://instathreds.dev/images/shirtbuilder-templates/mens-staple/mens-staple-back-shadow.png","filters":[],"crossOrigin":"anonymous"},{"type":"image","originX":"center","originY":"center","left":325,"top":345,"width":171,"height":189,"fill":"rgb(0,0,0)","stroke":null,"strokeWidth":1,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","viewIndex":0,"src":"http://instathreds.dev/images/designs/converse.png","filters":[],"crossOrigin":"anonymous"}],"background":"","width":945,"height":800}'); ?>; //$_POST['recreation_product']
			recreationStage.loadFromJSON(json, function () {

				var viewIndexes = 0;
				recreationStage.setDimensions({width: recreationStage.width * SCALE_FACTOR, height: recreationStage.height * SCALE_FACTOR});
				recreationStage.renderAll();
				var objects = recreationStage.getObjects();
			    for (var i in objects) {
			    	var object = objects[i];

			    	console.log(objects[6])

			    	//scale object
			        object.scaleX = object.scaleX * SCALE_FACTOR;
			        object.scaleY = object.scaleY * SCALE_FACTOR;
			        object.left = objects[i].left * SCALE_FACTOR;
			        //if you have different views, position views among each other
			        object.top = (objects[i].top * SCALE_FACTOR) + (object.viewIndex * json.height * SCALE_FACTOR);
			        object.setCoords();
			        object.visible = true;

					//apply filters to image objects
			        if (object.type === 'image' && object.filters.length) {
				      object.applyFilters(function() {
				        object.canvas.renderAll();
				      });
				    }

			        //resize height if necessary
			        if(object.viewIndex > viewIndexes) {
			        	viewIndexes++;
				        recreationStage.setHeight(recreationStage.getHeight() + (recreationStage.getHeight() * viewIndexes));
			        }
			    }
			    // recreationStage.renderAll();

			    console.log(recreationStage.toDataURL({format: 'png'}));
		    });
		}
    </script>

    </head>

    <body>
    	<canvas id="recreation-canvas" width="1800" height="1800">
    </body>
</html>