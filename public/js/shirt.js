$( document ).ready(function() {


/*GET SHIRT INFO*/
body = $('.canvas-template').attr('data-body');
base = $('.canvas-template').attr('data-base');
base_x = $('.canvas-template').attr('data-x');
base_y = $('.canvas-template').attr('data-y');
shadow = $('.canvas-template').attr('data-shadow');
product = $('.canvas-template').attr('data-product');
color = '#000000'; //default is white
    

/*LOAD THE SHIRT TEMPLATE*/
loadimage(body,base,shadow,base_x,base_y,color);    

function loadimage(imagebody,imagebase,imageshadow,base_x,base_y,color){

    //SHIRTBACKGROUND
    var img1 = new Image();
    img1.onload = function() { 
        var canvas1 = document.createElement('canvas');
        var context1 = canvas1.getContext('2d');  
        canvas1.width = img1.width;
        canvas1.height = img1.height;
        
        var w = img1.width; var h = img1.height;
        
        context1.drawImage(img1,0,0);
        var imagedata = context1.getImageData(0,0,w,h);    
        context1.putImageData(imagedata,0,0);


        var newcanvas = $(".shirt-template.active .front .canvas-template")[0];
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
        context2.globalAlpha = 0.5;
        context2.fillStyle = color;
        context2.fillRect(0, 0, canvas2.width, canvas2.height);
        var w = img2.width; var h = img2.height;
        
        var imagedata2 = context2.getImageData(0,0,w,h);    
        context2.putImageData(imagedata2,0,0);
        
        var newcanvas = $(".shirt-template.active .front .canvas-template")[0];
        var newcontext = newcanvas.getContext('2d');
        newcanvas.width = '630';
        newcanvas.height = '460';   
        setTimeout(function() {
            newcontext.drawImage(canvas2,base_x,base_y);
        }, 2000);
        //THIS ONE CONVERTS CANVAS TO IMAGE FILE
        //document.getElementById('canvas-final').src = newcanvas.toDataURL();
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
        context3.drawImage(img3,0,0,canvas3.width, canvas3.height);
        context3.globalCompositeOperation = "source-atop";
        context3.globalAlpha = 255;
        //context3.fillStyle = '#ffffff';
        //context3.fillRect(0, 0, canvas3.width, canvas3.height);
        var w = img3.width; var h = img3.height;
        
        var imagedata3 = context3.getImageData(0,0,w,h);    
        context3.putImageData(imagedata3,0,0);
        
        var newcanvas = $(".shirt-template.active .front .canvas-template")[0];
        var newcontext = newcanvas.getContext('2d');
        newcanvas.width = '630';
        newcanvas.height = '460';   
        
        setTimeout(function() {
            newcontext.drawImage(canvas3,base_x,base_y);
            $(".preloader").hide();
            document.getElementById('canvas-final').src = newcanvas.toDataURL();
            $("#canvas-final").fadeIn("slow");
        }, 2000);
        
    };
    img3.src = imageshadow;
    
}





/* -------------------------------- 
    COLOR OPTION FOR DETAILED SHIRT
    -----------------------------------*/
    /*
    $('.color-option').click(function(){
        hexcolor = $(this).attr('data-color');
        changecolor(hexcolor,'1');
    });


    function changecolor(color,alpha){
        //var canvas = document.getElementById("canvas"), // shared instance
        var canvas1 = $(".shirt-template.active .canvas-front")[0]; // shared instance
        var canvas2 = $(".shirt-template.active .canvas-back")[0];// shared instance
                

        context1 = canvas1.getContext("2d");
        context2 = canvas2.getContext("2d");
        
        
        //image = document.getElementById("base");
        image1 = $(".shirt-template.active .front .base")[0];
        canvas1.width = image1.width;
        canvas1.height = image1.height;
        context1.clearRect(0, 0, image1.width, image1.height);
        context1.drawImage(image1, 0, 0, canvas1.width, canvas1.height);
        context1.globalCompositeOperation = "source-atop";
        context1.globalAlpha = alpha;
        context1.fillStyle = color;
        context1.fillRect(0, 0, canvas1.width, canvas1.height);

        
        image2 = $(".shirt-template.active .back .base")[0];
        canvas2.width = image2.width;
        canvas2.height = image2.height;
        context2.clearRect(0, 0, image2.width, image2.height);
        context2.drawImage(image2, 0, 0, canvas2.width, canvas2.height);
        context2.globalCompositeOperation = "source-atop";
        context2.globalAlpha = alpha;
        context2.fillStyle = color;
        context2.fillRect(0, 0, canvas2.width, canvas2.height);
        
    }

    function placeproduct(){
        var canvas = $(".shirt-template.active .front .canvas-product")[0];// shared instance
        var screen = $(".shirt-template.active .front .body")[0];// shared instance
        base = $(".shirt-template.active .front .base")[0];
        
        $(".shirt-template.active .front .canvas-product").css("width", base.width);
        $(".shirt-template.active .front .canvas-product").css("height", base.height);
        
        var image = new Image();
        image.src = 'http://instathreds.dev/images/products/Game%20Over%20Space%20Scorpion.png';
        
        image.onload = function () {
            var cxt = canvas.getContext('2d');
            var cxt2 = screen.getContext('2d');
            
            newHeight = Math.floor(canvas.height * (0.61));
            newWidth = Math.floor(canvas.width / canvas.height * newHeight);

            x = canvas.width / 2 - newWidth / 2;
            y = canvas.height / 2 - newHeight / 2;

            cxt.drawImage(image,
                 x,
                 y,
                 newWidth,
                 newHeight
            );
        };
    }
    */

    /* SHIRT STYLE DROPDOWN */
    $(".shirt-type .dropdown-menu li a").click(function(e){
        e.preventDefault(); 
        var selText = $(this).text();
        $(this).parents().find('.dropdown-toggle').html(selText+' <span class="caret"></span>');

        
        shirt_type = $(this).attr('data-shirt');
        $('.shirt-template.active').hide();
        $('.shirt-template.active').removeClass("active");
        $('#'+shirt_type).show();
        $('#'+shirt_type).addClass("active");
        
        placeproduct();

        /*
        if(shirt_type == 'mens-staple'){
            $('.shirt-template.active').hide();
            $('.shirt-template.active').removeClass("active");
            $('#mens-staple').show();
            $('#mens-staple').addClass("active");
        }
        */

    });

    $(".shirt-view .front").click(function(e){
        e.preventDefault(); 
        $(".shirt-template .front").show();
        $(".shirt-template .back").hide();
    });

    $(".shirt-view .back").click(function(e){
        e.preventDefault(); 
        $(".shirt-template .front").hide();
        $(".shirt-template .back").show();
    });


     



    
       


});