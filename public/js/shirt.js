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

    var loader = new PxLoader(), 
    bodyImg = loader.addImage(imagebody), 
    baseImg = loader.addImage(imagebase), 
    shadowImg = loader.addImage(imageshadow),
    designImg = loader.addImage(imagedesign);

    loader.addCompletionListener(function(e) {

        //reset the image
        $('.shirt-template.active #canvas-final').hide();
            
        //show the preloader
        $('.shirt-template.active .preloader').show();

        var canvas = document.createElement('canvas');
        var context = canvas.getContext('2d');
        canvas.width = 630;
        canvas.height = 460;
        // Fill the path
        context.fillStyle = "#f3f3f4";
        context.fillRect(0,0,630,460);
        context.drawImage(bodyImg,0,0,bodyImg.width,bodyImg.height);
        

        var canvas2 = document.createElement('canvas');
        var context2 = canvas2.getContext('2d');
        canvas2.width = baseImg.width;
        canvas2.height = baseImg.height;
        context2.clearRect(0, 0, canvas2.width, canvas2.height);
        context2.drawImage(baseImg,0,0);
        context2.globalCompositeOperation = "source-atop";
        context2.globalAlpha = 1;
        context2.fillStyle = color;
        context2.fillRect(0, 0, canvas2.width, canvas2.height);

        context2.drawImage(shadowImg,0,0,canvas2.width, canvas2.height);

        
        var canvas3 = document.createElement('canvas');
        var context3 = canvas3.getContext('2d');  
        canvas3.width = 630;
        canvas3.height = 460;

        // var result = ScaleImage(designImg.width, designImg.height, 630, 460, true);
        var result = ScaleImage(designImg.width, designImg.height, baseImg.width-30, baseImg.height-30, true);
        x = canvas3.width - result.width - 45;
        context3.drawImage(designImg, x, result.targettop, result.width, result.height);
        
        var resultsmall = ScaleImage(designImg.width, designImg.height, baseImg.width-130, baseImg.height-130, true);
        //xposition = (canvas2.width - resultsmall.width)/2 ;
        //yposition = (canvas2.height - resultsmall.height)/2;
        xposition = (baseImg.width - resultsmall.width)/2 ;
        yposition = ((baseImg.height - resultsmall.height)/2)-20;
        
        context2.drawImage(designImg,xposition,yposition,resultsmall.width, resultsmall.height);

        var newcanvas = $(".shirt-template.active .canvas-template")[0];
        var newcontext = newcanvas.getContext('2d');
        newcanvas.width = '630';
        newcanvas.height = '460';   
        
        newcontext.drawImage(canvas,0,0,630,460);
        newcontext.drawImage(canvas2,base_x,base_y);
        newcontext.drawImage(canvas3,0,0);

        $(".preloader").hide();
        var finalProduct = newcanvas.toDataURL('image/jpeg');

        $(".shirt-template.active #canvas-final")[0].src = finalProduct;
        $(".final-product-image").html('<img src="'+finalProduct+'" style="width:150px;height:100px;">');

        $(".shirt-template.active #canvas-final").fadeIn("slow"); 
         
    }); 

    // begin downloading images 
    loader.start();
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

    // colour

    $(".color-option").on('click', function(e){
        e.preventDefault();

        $('.color-option').removeClass('active');
        $(this).addClass('active');

        //reset front and back button
        $(".shirt-view a").removeClass("active");
        $(".shirt-view .front").addClass("active");

        //reset the image
        $('.shirt-template.active #canvas-final').hide();
        
        var shirt = $(".shirt-template.active .canvas-template");
        body = shirt.attr('data-body');
        base = shirt.attr('data-base');
        base_x = shirt.attr('data-x');
        base_y = shirt.attr('data-y');
        shadow = shirt.attr('data-shadow');
        design = shirt.attr('data-product');
        color = $(this).data('color');

        loadimage(body,base,shadow,design,base_x,base_y,color);

    });

    //FRONT BUTTON
    $(".shirt-view .front").click(function(e){
        e.preventDefault();

        $(".shirt-view a").removeClass("active");
        $(".shirt-view .front").addClass("active");

        $(".shirt-back-checkbox").hide();


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

        $(".shirt-back-checkbox").show();

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


     //GENDER TABS
    $(".gender li a").click(function(e){
        
        e.preventDefault();
        gender = $(this).attr("id");
        $(".gender li a.active").removeClass("active");
        $(this).addClass("active");

        //reset front and back button
        $(".shirt-view a").removeClass("active");
        $(".shirt-view .front").addClass("active");


        if(gender == 'womens'){
            shirt = $("#womens-standard .canvas-template");
            $(".shirt-type-select").hide();
            $('.shirt-template.active').hide();
            $('.shirt-template.active').removeClass("active");
            $("#womens-type").show();
            $("#womens-standard").show();
            $("#womens-standard").addClass("active");

            ///////
            $(".shirt-type").removeClass("active-type");
            $("#womens-type").addClass("active-type");

            var autoSelectedType = $('.active-type').children('.dropdown-menu').find('a').first().text();
            $('.active-type').children('.shirt-type').html(autoSelectedType + '<span class="caret"></span>');

        }else if(gender == 'mens'){
            shirt = $("#mens-standard .canvas-template");
            $(".shirt-type-select").hide();
            $('.shirt-template.active').hide();
            $('.shirt-template.active').removeClass("active");
            $("#mens-type").show();
            $("#mens-standard").show()
            $("#mens-standard").addClass("active");


            ///////
            $(".shirt-type").removeClass("active-type");
            $("#mens-type").addClass("active-type");

            var autoSelectedType = $('.active-type').children('.dropdown-menu').find('a').first().text();
            $('.active-type').children('.shirt-type').html(autoSelectedType + '<span class="caret"></span>');

        }else if(gender == 'kids'){
            shirt = $("#kids-tee .canvas-template");
            $(".shirt-type-select").hide();
            $('.shirt-template.active').hide();
            $('.shirt-template.active').removeClass("active");
            $("#kids-type").show();
            $("#kids-tee").show();
            $("#kids-tee").addClass("active");

            //////
            $(".shirt-type").removeClass("active-type");
            $("#kids-type").addClass("active-type");

            var autoSelectedType = $('.active-type').children('.dropdown-menu').find('a').first().text();
            $('.active-type').children('.shirt-type').html(autoSelectedType + '<span class="caret"></span>');
        }

        
        //var shirt = $(".shirt-template.active .canvas-template");
        body = shirt.attr('data-body');
        base = shirt.attr('data-base');
        base_x = shirt.attr('data-x');
        base_y = shirt.attr('data-y');
        shadow = shirt.attr('data-shadow');
        design = shirt.attr('data-product');
        color = '#000000'; //default is white

        loadimage(body,base,shadow,design,base_x,base_y,color); 
    });

    var makeRequest = function(Data, URL, Method) {

        var request = $.ajax({
            url: URL,
            type: "POST",
            data: Data,
            dataType: "JSON",
            success: function(response) {
                // if success remove current item
                // console.log(response);
            },
            error: function( error ){
                // Log any error.
                console.log( "ERROR:", error );
            }
        });

        return request;
    };

    var request;
    $('.shirt-type-select .dropdown-menu a').on('click', function(e){

        e.preventDefault();

        $('span.selected-type').text($(this).text());

        // abort any pending request
        if (request) {
            request.abort();
        }

        var shirtTypeID = $(this).data('id');

        var requestJsonData = { id : shirtTypeID };

        request = makeRequest(requestJsonData, "/singleproduct/getcolors", "POST");

        request.done(function(){
            console.log(request);

            var result = jQuery.parseJSON(request.responseText);
            
            console.log(result);

            $('.color-list').html('');
            $.each(result, function(i, v){
                var active_by_default_color_li = '<li><span class="color-option active" id="'+v.name+'" data-color="'+v.hex_value+'" style="background-color: '+v.hex_value+'"></span></li>';
                var color_li = '<li><span class="color-option" id="'+v.name+'" data-color="'+v.hex_value+'" style="background-color: '+v.hex_value+'"></span></li>';

                if(i==0)
                    $('.color-list').append(active_by_default_color_li);
                else
                    $('.color-list').append(color_li);
            });

            $(".color-option").on('click', function(e){
                e.preventDefault();

                $('.color-option').removeClass('active');
                $(this).addClass('active');

                //reset front and back button
                $(".shirt-view a").removeClass("active");
                $(".shirt-view .front").addClass("active");

                //reset the image
                $('.shirt-template.active #canvas-final').hide();
                
                var shirt = $(".shirt-template.active .canvas-template");
                body = shirt.attr('data-body');
                base = shirt.attr('data-base');
                base_x = shirt.attr('data-x');
                base_y = shirt.attr('data-y');
                shadow = shirt.attr('data-shadow');
                design = shirt.attr('data-product');
                color = $(this).data('color');

                loadimage(body,base,shadow,design,base_x,base_y,color);

            });

        });

        request2 = makeRequest(requestJsonData, "/singleproduct/getsizes", "POST");

        request2.done(function(){
            console.log(request2);

            var result = jQuery.parseJSON(request2.responseText);
            
            console.log(result);

            $('.shirt-size').html('');
            $.each(result, function(i, v){
                var active_by_default_size_anchor = '<a href="javascript:void(0);" class="active">'+v.title+'</a>';
                var size_anchor = '<a href="javascript:void(0);">'+v.title+'</a>';

                if(i==0)
                    $('.shirt-size').append(active_by_default_size_anchor);
                else
                    $('.shirt-size').append(size_anchor);
            });

            $('.shirt-size a').on('click', function(e){
              $('.shirt-size .active').removeClass('active');
              $(this).addClass('active');
            });

        });     
        
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