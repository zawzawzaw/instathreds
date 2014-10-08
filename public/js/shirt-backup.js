$( document ).ready(function() {

/*GET SHIRT INFO*/
var shirt = $(".shirt-template.active .canvas-template");
body = shirt.attr('data-body');
base = shirt.attr('data-base');
base_x = shirt.attr('data-x');
base_y = shirt.attr('data-y');
shadow = shirt.attr('data-shadow');
design = shirt.attr('data-product');
color = '#000000'; //default is white

/*LOAD THE SHIRT TEMPLATE*/
loadimage(body,base,shadow,design,base_x,base_y,color);    

function loadimage(imagebody,imagebase,imageshadow,imagedesign,base_x,base_y,color){
    
    //reset the image
    $('.shirt-template.active #canvas-final').hide();
        
    //show the preloader
    //$('.shirt-template.active .preloader').show();
        

    //SHIRTBACKGROUND
    var img1 = new Image();
    img1.onload = function() { 
        var canvas1 = document.createElement('canvas');
        var context1 = canvas1.getContext('2d');  
        canvas1.width = img1.width;
        canvas1.height = img1.height;
        
        var w = img1.width; var h = img1.height;
        context1.drawImage(img1,0,0);
        //var imagedata = context1.getImageData(0,0,w,h);    
        //context1.putImageData(imagedata,0,0);
        


        var newcanvas = $(".shirt-template.active .canvas-template")[0];
        var newcontext = newcanvas.getContext('2d');   
        newcanvas.width = '630';
        newcanvas.height = '460';
        setTimeout(function() {
            
            
            newcontext.drawImage(canvas1,0,0,630,460);
            //document.getElementById('canvas-final').src = newcanvas.toDataURL();
        }, 1000);
        //document.getElementById('canvas-final').src = canvas1.toDataURL();
    };
    img1.src = imagebody;

    //SHIRTBASE + COLOR
    var canvas2 = document.createElement('canvas');
    var context2 = canvas2.getContext('2d');  
        
    var img2 = new Image();
    img2.onload = function() { 
        canvas2.width = img2.width;
        canvas2.height = img2.height;
        context2.clearRect(0, 0, canvas2.width, canvas2.height);

        context2.drawImage(img2,0,0);
        context2.globalCompositeOperation = "source-atop";
        context2.globalAlpha = 1;
        context2.fillStyle = color;
        context2.fillRect(0, 0, canvas2.width, canvas2.height);
        var w = img2.width; var h = img2.height;
        //var imagedata2 = context2.getImageData(0,0,w,h);    
        //context2.putImageData(imagedata2,0,0);
    
        
        var newcanvas = $(".shirt-template.active .canvas-template")[0];
        var newcontext = newcanvas.getContext('2d');
        newcanvas.width = '630';
        newcanvas.height = '460';   
        setTimeout(function() {
            newcontext.drawImage(canvas2,base_x,base_y);
        }, 1000);
    };
    img2.src = imagebase;
    
    

    //SHIRT SHADOW
    
    var canvas3 = document.createElement('canvas');
    var context3 = canvas3.getContext('2d');  
    var img3 = new Image();
    img3.onload = function() { 
        canvas3.width = img3.width;
        canvas3.height = img3.height;
        context3.clearRect(0, 0, canvas3.width, canvas3.height);
        var w = img3.width; var h = img3.height;
        context3.drawImage(img3,0,0,canvas3.width, canvas3.height);
        context3.globalCompositeOperation = "source-atop";
        context3.globalAlpha = 0.5;
            
        //var imagedata3 = context3.getImageData(0,0,w,h);    
        //context3.putImageData(imagedata3,0,0);
        
        var newcanvas = $(".shirt-template.active .canvas-template")[0];
        var newcontext = newcanvas.getContext('2d');
        newcanvas.width = '630';
        newcanvas.height = '460';   
        
        setTimeout(function() {
            newcontext.drawImage(canvas3,base_x,base_y);
        }, 1000);
        
    };
    img3.src = imageshadow;
    
    
    //SHIRT DESIGN
    var canvas4 = document.createElement('canvas');
    var context4 = canvas4.getContext('2d');  
    var img4 = new Image();
    img4.onload = function() { 
        canvas4.width = 630;
        canvas4.height = 460;
        context4.clearRect(0, 0, canvas4.width, canvas4.height);

        var result = ScaleImage(img4.width, img4.height, 630, 460, true);

        x = canvas4.width - result.width;
        context4.drawImage(img4, x, result.targettop, result.width, result.height);
        var resultsmall = ScaleImage(img4.width, img4.height, canvas2.width-90, canvas2.height-90, true);
        xposition = (canvas2.width - resultsmall.width)/2 ;
        yposition = (canvas2.height - resultsmall.height)/2;
        context2.drawImage(img4,xposition,yposition,resultsmall.width, resultsmall.height);
        
        //var w = newWidth; var h = newHeight;
        //var imagedata4 = context4.getImageData(0,0,w,h);    
        //context4.putImageData(imagedata4,0,0);
        
        var newcanvas = $(".shirt-template.active .canvas-template")[0];
        var newcontext = newcanvas.getContext('2d');
        newcanvas.width = '630';
        newcanvas.height = '460';   
        
        setTimeout(function() {
            newcontext.drawImage(canvas4,0,0);
            $(".preloader").hide();
            $(".shirt-template.active #canvas-final")[0].src = newcanvas.toDataURL('image/jpeg');
            $(".shirt-template.active #canvas-final").fadeIn("slow");
        }, 1000);
        
    };
    img4.src = imagedesign;
    
}





/* -------------------------------- 
    COLOR OPTION FOR DETAILED SHIRT
    -----------------------------------*/
    /*
    $('.color-option').click(function(){
        hexcolor = $(this).attr('data-color');
        changecolor(hexcolor,'1');
    });


   

    /* SHIRT STYLE DROPDOWN */
    $(".shirt-type .dropdown-menu li a").click(function(e){
        e.preventDefault(); 
        var selText = $(this).text();
        $(this).parents().find('.dropdown-toggle').html(selText+' <span class="caret"></span>');

        //reset front and back button
        $(".shirt-view a").removeClass("active");
        $(".shirt-view .front").addClass("active");


        //reset the image
        $('.shirt-template.active #canvas-final').hide();
    
        
        shirt_type = $(this).attr('data-shirt');
        $('.shirt-template.active').hide();
        $('.shirt-template.active').removeClass("active");
        $('#'+shirt_type).show();
        $('#'+shirt_type).show();
        $('#'+shirt_type).addClass("active");
        
        
        var shirt = $(".shirt-template.active .canvas-template");
        body = shirt.attr('data-body');
        base = shirt.attr('data-base');
        base_x = shirt.attr('data-x');
        base_y = shirt.attr('data-y');
        shadow = shirt.attr('data-shadow');
        design = shirt.attr('data-product');
        color = '#000000'; //default is white

        loadimage(body,base,shadow,design,base_x,base_y,color);    

    });

    //FRONT BUTTON
    $(".shirt-view .front").click(function(e){
        e.preventDefault();

        $(".shirt-view a").removeClass("active");
        $(".shirt-view .front").addClass("active");


        var shirt = $(".shirt-template.active .canvas-template");
        body = shirt.attr('data-body');
        base = shirt.attr('data-base');
        base_x = shirt.attr('data-x');
        base_y = shirt.attr('data-y');
        shadow = shirt.attr('data-shadow');
        design = shirt.attr('data-product');
        color = '#000000'; //default is white

        loadimage(body,base,shadow,design,base_x,base_y,color); 

    });

    //BACK BUTTON
    $(".shirt-view .back").click(function(e){
        e.preventDefault(); 
        $(".shirt-view a").removeClass("active");
        $(".shirt-view .back").addClass("active");


        var shirt = $(".shirt-template.active .canvas-template.back");
        body = shirt.attr('data-body');
        base = shirt.attr('data-base');
        base_x = shirt.attr('data-x');
        base_y = shirt.attr('data-y');
        shadow = shirt.attr('data-shadow');
        design = shirt.attr('data-product');
        color = '#000000'; //default is white

        loadimage(body,base,shadow,design,base_x,base_y,color); 

    });


//SCALE IMAGE FUNCTION     
function ScaleImage(srcwidth, srcheight, targetwidth, targetheight, fLetterBox) {

    var result = { width: 0, height: 0, fScaleToTargetWidth: true };

    if ((srcwidth <= 0) || (srcheight <= 0) || (targetwidth <= 0) || (targetheight <= 0)) {
        return result;
    }

    // scale to the target width
    var scaleX1 = targetwidth;
    var scaleY1 = (srcheight * targetwidth) / srcwidth;

    // scale to the target height
    var scaleX2 = (srcwidth * targetheight) / srcheight;
    var scaleY2 = targetheight;

    // now figure out which one we should use
    var fScaleOnWidth = (scaleX2 > targetwidth);
    if (fScaleOnWidth) {
        fScaleOnWidth = fLetterBox;
    }
    else {
       fScaleOnWidth = !fLetterBox;
    }

    if (fScaleOnWidth) {
        result.width = Math.floor(scaleX1);
        result.height = Math.floor(scaleY1);
        result.fScaleToTargetWidth = true;
    }
    else {
        result.width = Math.floor(scaleX2);
        result.height = Math.floor(scaleY2);
        result.fScaleToTargetWidth = false;
    }
    result.targetleft = Math.floor((targetwidth - result.width) / 2);
    result.targettop = Math.floor((targetheight - result.height) / 2);

    return result;
}


    
       


});