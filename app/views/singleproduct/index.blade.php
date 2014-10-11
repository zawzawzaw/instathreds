@section('content')
	<!-- BANNER/SLIDER -->
    <section class="slider">
      <div class="container">
        <div class="offers-bar">
          <h6><span>NEW FEATURED DESIGNS!</span> SHOP NOW</h6>  
        </div>
      </div>
    </section>
    <!-- END BANNER/SLIDER -->

    <!-- CONTENT -->
    <section class="content detailed-product">
      <div class="container">
          <div class="row product-head">
            <div class="gender">
              <ul>
                <li><a href="" class="active mens" id="mens">HIS</a></li>
                <li><a href="" class="womens" id="womens">HER</a></li>
                <li><a href="" class="kids" id="kids">KIDS</a></li>
            </div>
            <div class="breadcrumbs">
              <ul>
                <li><a href="{{ route('store.index') }}">ALL CATEGORIES</a><span>></span></li>
                <li><a href="{{ URL::to('store', array($category->name, $category->id)) }}">{{ Str::upper($category->name) }}</a><span>></span></li>
                <li><a href="javascript:void(0);">{{ Str::upper($product->title) }}</a></li>
              </ul>  
            </div>
          </div>

          <div class="row product">
            <div class="left">

            

              
              <!-- MENS-STANDARD -->
              <div class="shirt-template active" id="mens-standard">
                <canvas class="canvas-template" 
                data-shadow="http://instathreds.dev/images/shirt-templates/mens-standard/mens-standard-front-shadow.png" 
                data-base="http://instathreds.dev/images/shirt-templates/mens-standard/mens-standard-front-base.png" 
                data-body="http://instathreds.dev/images/shirt-templates/mens-standard/mens-standard-front-body.png" 
                data-product="http://instathreds.dev/images/products/gamescorpion.png" 
                data-x="25" 
                data-y="55">
                </canvas>
                <canvas class="canvas-template back" 
                data-shadow="http://instathreds.dev/images/shirt-templates/mens-standard/mens-standard-back-shadow.png" 
                data-base="http://instathreds.dev/images/shirt-templates/mens-standard/mens-standard-back-base.png" 
                data-body="http://instathreds.dev/images/shirt-templates/mens-standard/mens-standard-back-body.png" 
                data-product="http://instathreds.dev/images/products/gamescorpion.png" 
                data-x="28" 
                data-y="54">
                </canvas>
                <div class="preloader">
                {{ HTML::image('images/loading-spinning-bubbles.svg', '', array('width' => '64','height' => '64')) }}
                </div>
                <img id="canvas-final" src="">
              </div>


              <!-- MENS-STAPLE -->
              <div class="shirt-template" id="mens-staple">
                <canvas class="canvas-template" 
                data-shadow="http://instathreds.dev/images/shirt-templates/mens-staple/mens-staple-front-shadow.png" 
                data-base="http://instathreds.dev/images/shirt-templates/mens-staple/mens-staple-front-base.png" 
                data-body="http://instathreds.dev/images/shirt-templates/mens-staple/mens-staple-front-body.png" 
                data-product="http://instathreds.dev/images/products/gamescorpion.png" 
                data-x="23" 
                data-y="50">
                </canvas>
                <canvas class="canvas-template back" 
                data-shadow="http://instathreds.dev/images/shirt-templates/mens-staple/mens-staple-back-shadow.png" 
                data-base="http://instathreds.dev/images/shirt-templates/mens-staple/mens-staple-back-base.png" 
                data-body="http://instathreds.dev/images/shirt-templates/mens-staple/mens-staple-back-body.png" 
                data-product="http://instathreds.dev/images/products/gamescorpion.png" 
                data-x="30" 
                data-y="58">
                </canvas>
                <div class="preloader">
                {{ HTML::image('images/loading-spinning-bubbles.svg', '', array('width' => '64','height' => '64')) }}
                </div>
                <img id="canvas-final" src="">
              </div>


              <!-- MENS-LOWDOWN -->
              <div class="shirt-template" id="mens-lowdown">
                <canvas class="canvas-template" 
                data-shadow="http://instathreds.dev/images/shirt-templates/mens-lowdown/mens-lowdown-front-shadow.png" 
                data-base="http://instathreds.dev/images/shirt-templates/mens-lowdown/mens-lowdown-front-base.png" 
                data-body="http://instathreds.dev/images/shirt-templates/mens-lowdown/mens-lowdown-front-body.png" 
                data-product="http://instathreds.dev/images/products/gamescorpion.png" 
                data-x="26" 
                data-y="60">
                </canvas>
                <canvas class="canvas-template back" 
                data-shadow="http://instathreds.dev/images/shirt-templates/mens-lowdown/mens-lowdown-back-shadow.png" 
                data-base="http://instathreds.dev/images/shirt-templates/mens-lowdown/mens-lowdown-back-base.png" 
                data-body="http://instathreds.dev/images/shirt-templates/mens-lowdown/mens-lowdown-back-body.png" 
                data-product="http://instathreds.dev/images/products/gamescorpion.png"
                data-x="37" 
                data-y="66">
                </canvas>
                <div class="preloader">
                {{ HTML::image('images/loading-spinning-bubbles.svg', '', array('width' => '64','height' => '64')) }}
                </div>
                <img id="canvas-final" src="">
              </div>

              <!-- MENS-BARNARD -->
              <div class="shirt-template" id="mens-barnard">
                <canvas class="canvas-template" 
                data-shadow="http://instathreds.dev/images/shirt-templates/mens-barnard/mens-barnard-front-shadow.png" 
                data-base="http://instathreds.dev/images/shirt-templates/mens-barnard/mens-barnard-front-base.png" 
                data-body="http://instathreds.dev/images/shirt-templates/mens-barnard/mens-barnard-front-body.png" 
                data-product="http://instathreds.dev/images/products/gamescorpion.png"
                data-x="32" 
                data-y="54">
                </canvas>
                <canvas class="canvas-template back" 
                data-shadow="http://instathreds.dev/images/shirt-templates/mens-barnard/mens-barnard-back-shadow.png" 
                data-base="http://instathreds.dev/images/shirt-templates/mens-barnard/mens-barnard-back-base.png" 
                data-body="http://instathreds.dev/images/shirt-templates/mens-barnard/mens-barnard-back-body.png" 
                data-product="http://instathreds.dev/images/products/gamescorpion.png"
                data-x="37" 
                data-y="57">
                </canvas>
                <div class="preloader">
                {{ HTML::image('images/loading-spinning-bubbles.svg', '', array('width' => '64','height' => '64')) }}
                </div>
                <img id="canvas-final" src="">
              </div>


              <!-- MENS-TALL -->
              <div class="shirt-template" id="mens-tall">
                <canvas class="canvas-template" 
                data-shadow="http://instathreds.dev/images/shirt-templates/mens-tall/mens-tall-front-shadow.png" 
                data-base="http://instathreds.dev/images/shirt-templates/mens-tall/mens-tall-front-base.png" 
                data-body="http://instathreds.dev/images/shirt-templates/mens-tall/mens-tall-front-body.png" 
                data-product="http://instathreds.dev/images/products/gamescorpion.png"
                data-x="28" 
                data-y="49">
                </canvas>
                <canvas class="canvas-template back" 
                data-shadow="http://instathreds.dev/images/shirt-templates/mens-tall/mens-tall-back-shadow.png" 
                data-base="http://instathreds.dev/images/shirt-templates/mens-tall/mens-tall-back-base.png" 
                data-body="http://instathreds.dev/images/shirt-templates/mens-tall/mens-tall-back-body.png" 
                data-product="http://instathreds.dev/images/products/gamescorpion.png"
                data-x="31" 
                data-y="52">
                </canvas>
                <div class="preloader">
                {{ HTML::image('images/loading-spinning-bubbles.svg', '', array('width' => '64','height' => '64')) }}
                </div>
                <img id="canvas-final" src="">
              </div>



              <!-- WOMENS-STANDARD -->
              <div class="shirt-template" id="womens-standard">
                <canvas class="canvas-template" 
                data-shadow="http://instathreds.dev/images/shirt-templates/womens-standard/womens-standard-front-shadow.png" 
                data-base="http://instathreds.dev/images/shirt-templates/womens-standard/womens-standard-front-base.png" 
                data-body="http://instathreds.dev/images/shirt-templates/womens-standard/womens-standard-front-body.png" 
                data-product="http://instathreds.dev/images/products/gamescorpion.png" 
                data-x="18" 
                data-y="58">
                </canvas>
                <canvas class="canvas-template back" 
                data-shadow="http://instathreds.dev/images/shirt-templates/womens-standard/womens-standard-back-shadow.png" 
                data-base="http://instathreds.dev/images/shirt-templates/womens-standard/womens-standard-back-base.png" 
                data-body="http://instathreds.dev/images/shirt-templates/womens-standard/womens-standard-back-body.png" 
                data-product="http://instathreds.dev/images/products/gamescorpion.png" 
                data-x="24" 
                data-y="56">
                </canvas>
                <div class="preloader">
                {{ HTML::image('images/loading-spinning-bubbles.svg', '', array('width' => '64','height' => '64')) }}
                </div>
                <img id="canvas-final" src="">
              </div>


              <!-- WOMENS-TANKTEE -->
              <div class="shirt-template" id="womens-tanktee">
                <canvas class="canvas-template" 
                data-shadow="http://instathreds.dev/images/shirt-templates/womens-tanktee/womens-tanktee-front-shadow.png" 
                data-base="http://instathreds.dev/images/shirt-templates/womens-tanktee/womens-tanktee-front-base.png" 
                data-body="http://instathreds.dev/images/shirt-templates/womens-tanktee/womens-tanktee-front-body.png" 
                data-product="http://instathreds.dev/images/products/gamescorpion.png" 
                data-x="28" 
                data-y="55">
                </canvas>
                <canvas class="canvas-template back" 
                data-shadow="http://instathreds.dev/images/shirt-templates/womens-tanktee/womens-tanktee-back-shadow.png" 
                data-base="http://instathreds.dev/images/shirt-templates/womens-tanktee/womens-tanktee-back-base.png" 
                data-body="http://instathreds.dev/images/shirt-templates/womens-tanktee/womens-tanktee-back-body.png" 
                data-product="http://instathreds.dev/images/products/gamescorpion.png" 
                data-x="35" 
                data-y="73">
                </canvas>
                <div class="preloader">
                {{ HTML::image('images/loading-spinning-bubbles.svg', '', array('width' => '64','height' => '64')) }}
                </div>
                <img id="canvas-final" src="">
              </div>


              <!-- WOMENS-MALI -->
              <div class="shirt-template" id="womens-mali">
                <canvas class="canvas-template" 
                data-shadow="http://instathreds.dev/images/shirt-templates/womens-mali/womens-mali-front-shadow.png" 
                data-base="http://instathreds.dev/images/shirt-templates/womens-mali/womens-mali-front-base.png" 
                data-body="http://instathreds.dev/images/shirt-templates/womens-mali/womens-mali-front-body.png" 
                data-product="http://instathreds.dev/images/products/gamescorpion.png" 
                data-x="17" 
                data-y="58">
                </canvas>
                <canvas class="canvas-template back" 
                data-shadow="http://instathreds.dev/images/shirt-templates/womens-mali/womens-mali-back-shadow.png" 
                data-base="http://instathreds.dev/images/shirt-templates/womens-mali/womens-mali-back-base.png" 
                data-body="http://instathreds.dev/images/shirt-templates/womens-mali/womens-mali-back-body.png" 
                data-product="http://instathreds.dev/images/products/gamescorpion.png" 
                data-x="22" 
                data-y="58">
                </canvas>
                <div class="preloader">
                {{ HTML::image('images/loading-spinning-bubbles.svg', '', array('width' => '64','height' => '64')) }}
                </div>
                <img id="canvas-final" src="">
              </div>

              <!-- WOMENS-DASHRACERBACK -->
              <div class="shirt-template" id="womens-dashracerback">
                <canvas class="canvas-template" 
                data-shadow="http://instathreds.dev/images/shirt-templates/womens-dashracerback/womens-dashracerback-front-shadow.png" 
                data-base="http://instathreds.dev/images/shirt-templates/womens-dashracerback/womens-dashracerback-front-base.png" 
                data-body="http://instathreds.dev/images/shirt-templates/womens-dashracerback/womens-dashracerback-front-body.png" 
                data-product="http://instathreds.dev/images/products/gamescorpion.png" 
                data-x="27" 
                data-y="61">
                </canvas>
                <canvas class="canvas-template back" 
                data-shadow="http://instathreds.dev/images/shirt-templates/womens-dashracerback/womens-dashracerback-back-shadow.png" 
                data-base="http://instathreds.dev/images/shirt-templates/womens-dashracerback/womens-dashracerback-back-base.png" 
                data-body="http://instathreds.dev/images/shirt-templates/womens-dashracerback/womens-dashracerback-back-body.png" 
                data-product="http://instathreds.dev/images/products/gamescorpion.png" 
                data-x="33" 
                data-y="59">
                </canvas>
                <div class="preloader">
                {{ HTML::image('images/loading-spinning-bubbles.svg', '', array('width' => '64','height' => '64')) }}
                </div>
                <img id="canvas-final" src="">
              </div>


              <!-- KIDS TEE -->
              <div class="shirt-template" id="kids-tee">
                <canvas class="canvas-template" 
                data-shadow="http://instathreds.dev/images/shirt-templates/kids-tee/kids-tee-front-shadow.png" 
                data-base="http://instathreds.dev/images/shirt-templates/kids-tee/kids-tee-front-base.png" 
                data-body="http://instathreds.dev/images/shirt-templates/kids-tee/kids-tee-front-body.png" 
                data-product="http://instathreds.dev/images/products/gamescorpion.png" 
                data-x="10" 
                data-y="55">
                </canvas>
                <canvas class="canvas-template back" 
                data-shadow="http://instathreds.dev/images/shirt-templates/kids-tee/kids-tee-back-shadow.png" 
                data-base="http://instathreds.dev/images/shirt-templates/kids-tee/kids-tee-back-base.png" 
                data-body="http://instathreds.dev/images/shirt-templates/kids-tee/kids-tee-back-body.png" 
                data-product="http://instathreds.dev/images/products/gamescorpion.png" 
                data-x="16" 
                data-y="59">
                </canvas>
                <div class="preloader">
                {{ HTML::image('images/loading-spinning-bubbles.svg', '', array('width' => '64','height' => '64')) }}
                </div>
                <img id="canvas-final" src="">
              </div>

              <!-- KIDS MINI -->
              <div class="shirt-template" id="kids-mini">
                <canvas class="canvas-template" 
                data-shadow="http://instathreds.dev/images/shirt-templates/kids-mini/kids-mini-front-shadow.png" 
                data-base="http://instathreds.dev/images/shirt-templates/kids-mini/kids-mini-front-base.png" 
                data-body="http://instathreds.dev/images/shirt-templates/kids-mini/kids-mini-front-body.png" 
                data-product="http://instathreds.dev/images/products/gamescorpion.png" 
                data-x="3" 
                data-y="42">
                </canvas>
                <canvas class="canvas-template back" 
                data-shadow="http://instathreds.dev/images/shirt-templates/kids-mini/kids-mini-back-shadow.png" 
                data-base="http://instathreds.dev/images/shirt-templates/kids-mini/kids-mini-back-base.png" 
                data-body="http://instathreds.dev/images/shirt-templates/kids-mini/kids-mini-back-body.png" 
                data-product="http://instathreds.dev/images/products/gamescorpion.png" 
                data-x="4" 
                data-y="33">
                </canvas>
                <div class="preloader">
                {{ HTML::image('images/loading-spinning-bubbles.svg', '', array('width' => '64','height' => '64')) }}
                </div>
                <img id="canvas-final" src="">
              </div>







            </div>
            <div class="right">
              <h6 class="product-title">{{ Str::upper($product->title) }}</h6>
              <div class="shirt-type shirt-type-select" id="mens-type">
                <a data-toggle="dropdown" class="dropdown-toggle shirt-type" href="#"><span class="selected-type">Shirt Type</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="" data-shirt="mens-standard">Standard</a></li>
                  <li><a href="" data-shirt="mens-staple">Staple</a></li>
                  <li><a href="" data-shirt="mens-lowdown">Lowdown</a></li>
                  <li><a href="" data-shirt="mens-barnard">Barnard</a></li>
                  <li><a href="" data-shirt="mens-tall">Tall</a></li>
                </ul>
              </div>

              <div class="shirt-type shirt-type-select" id="womens-type">
                <a data-toggle="dropdown" class="dropdown-toggle shirt-type" href="#"><span class="selected-type">Shirt Type</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="" data-shirt="womens-standard">Standard</a></li>
                  <li><a href="" data-shirt="womens-tanktee">Tank Tee</a></li>
                  <li><a href="" data-shirt="womens-mali">Mali</a></li>
                  <li><a href="" data-shirt="womens-dashracerback">Dash Racerback</a></li>
                  
                </ul>
              </div>

              <div class="shirt-type shirt-type-select" id="kids-type">
                <a data-toggle="dropdown" class="dropdown-toggle shirt-type" href="#"><span class="selected-type">Shirt Type</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="" data-shirt="kids-tee">Kids Tee</a></li>
                  <li><a href="" data-shirt="kids-mini">Kids Mini</a></li>
                </ul>
              </div>
              
              <div class="shirt-size">
                <a href="javascript:void(0);" class="active">S</a>
                <a href="javascript:void(0);">M</a>
                <a href="javascript:void(0);">L</a>
                <a href="javascript:void(0);">XL</a>
                <a href="javascript:void(0);">2XL</a>
              </div>
              <div class="shirt-color">
                <h6>Select a colour</h6>
                <ul class="color-list">
                @if($colours->count() > 0)
                  @foreach($colours as $colour)
                    <li><span class="color-option active" id="{{ $colour->name }}" data-color="{{ $colour->hex_value }}"></span></li>
                  @endforeach
                @else
                  <li><span class="color-option active" id="black" data-color="#000000"></span></li>
                  <li><span class="color-option" id="pink" data-color="#e83fd4"></span></li>  
                @endif
                </ul>  
              </div>
              <div class="shirt-view">
                <a href="" class="active front">FRONT</a>
                <span>or</span>
                <a href="" class="back">BACK</a>
                <span class="price">${{ $product->price }}</span>
              </div>
              <div class="shirt-back-checkbox">
                <input type="checkbox"><p>Do you want a print at the back of the shirt?</p>
              </div>
              <div class="shirt-quantity">
                  <input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">
                  <a href="#cart-modal" class="addtocart-link btn btn-primary">ADD TO CART</a>
              </div>
              <div class="share">
                <h6>SHARE WITH FRIENDS</h6>  
              </div>
            </div>
          </div>  
          
         
      </div>
    </section>

    <section class="more-products">
      <div class="container">
        <h6>ALSO IN PIXEL PEOPLE</h6>  
        <div class="more-products-slider owl-carousel">
          @foreach($related_products as $related_product)
          <div class="item">
            <a href="{{ URL::to('product', array(Product::slug($related_product->title), $related_product->id)) }}">{{ HTML::image('images/products/thumbs/'.$related_product->image, '', array('style'=>'width:198px;height:198px;')) }}</a>
            <a href="{{ URL::to('product', array(Product::slug($related_product->title), $related_product->id)) }}" class="product-title">{{ $product->title }}</a>
          </div>
          @endforeach
          <!-- <div class="item">
            <a href="">{{ HTML::image('images/image-placeholder1.png', '',array('style'=>'width:198px;height:198px;')) }}</a>
            <a href="" class="product-title">Design title goes here</a>
          </div>
          <div class="item">
            <a href="">{{ HTML::image('images/image-placeholder1.png', '',array('style'=>'width:198px;height:198px;')) }}</a>
            <a href="" class="product-title">Design title goes here</a>
          </div>
          <div class="item">
            <a href="">{{ HTML::image('images/image-placeholder1.png', '',array('style'=>'width:198px;height:198px;')) }}</a>
            <a href="" class="product-title">Design title goes here</a>
          </div>
          <div class="item">
            <a href="">{{ HTML::image('images/image-placeholder1.png', '',array('style'=>'width:198px;height:198px;')) }}</a>
            <a href="" class="product-title">Design title goes here</a>
          </div>
          <div class="item">
            <a href="">{{ HTML::image('images/image-placeholder1.png', '',array('style'=>'width:198px;height:198px;')) }}</a>
            <a href="" class="product-title">Design title goes here</a>
          </div>
          <div class="item">
            <a href="">{{ HTML::image('images/image-placeholder1.png', '',array('style'=>'width:198px;height:198px;')) }}</a>
            <a href="" class="product-title">Design title goes here</a>
          </div>
          <div class="item">
            <a href="">{{ HTML::image('images/image-placeholder1.png', '',array('style'=>'width:198px;height:198px;')) }}</a>
            <a href="" class="product-title">Design title goes here</a>
          </div>
          <div class="item">
            <a href="">{{ HTML::image('images/image-placeholder1.png', '',array('style'=>'width:198px;height:198px;')) }}</a>
            <a href="" class="product-title">Design title goes here</a>
          </div>
          <div class="item">
            <a href="">{{ HTML::image('images/image-placeholder1.png', '',array('style'=>'width:198px;height:198px;')) }}</a>
            <a href="" class="product-title">Design title goes here</a>
          </div> -->
            
        </div>
      </div>
    </section>

    <!-- CART MODAL -->
    <div class="modal fade" id="cart-modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            
            <div class="cart-wrap">
              <h6>WE’VE ADDED THIS TO YOUR CART</h6>
              {{ HTML::image('images/products/thumbs/'.$product->image, '', array('style'=>'width:150px;height:100px;')) }}
              <!-- <img src="images/image-placeholder1.png" style="width:150px;height:100px;"> -->
              <div class="form-group">
                <button class="btn btn-primary checkout">CHECKOUT NOW</button>
                <div style="clear:both;">
                <a href="{{ route('store.index') }}"><button class="btn continueshopping">CONTINUE SHOPPING</button></a>
                <a href="{{ route('cart.index') }}"><button class="btn viewcart">VIEW CART</button></a>
                </div>  
              </div>
              
            </div>

          </div>
        </div>
      </div>
    </div>

    {{ HTML::script('js/admin/jquery-1.10.2.min.js') }}
    <script type="text/javascript">
      $(document).ready(function(){

        var makeRequest = function(Data, URL, Method) {

            var request = $.ajax({
              url: URL,
              type: Method,
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

        var addToCartJSON = {
          'id': '{{ $product->id }}', 
          'title': '{{ $product->title }}',
          'price' : '{{ $product->price }}',
          'qty' : 1,
          'attr' : {
            'size' : 'M',
            'color' : 'Black'
          }
        };

        var request;
        $('.addtocart-link').on('click', function(e){
          addToCartJSON.qty = $('.qty').val();
          addToCartJSON.attr.size = $('.shirt-size .active').text();
          addToCartJSON.attr.color = $('.color-list .active').data('color');
          addToCartJSON.attr.shirt_type = $('.selected-type').text();

          // console.log(addToCartJSON);

          // abort any pending request
          if (request) {
              request.abort();
          }

          request = makeRequest(addToCartJSON, "{{ route('cart.store') }}" , "POST");

          request.done(function(){
            var result = jQuery.parseJSON(request.responseText);

            console.log(result)
                       
            if(result) {
              $('#cart-modal').modal('show');
              // window.location = "{{ route('cart.index') }}";
            }

          });     

        });

        $('.shirt-size a').on('click', function(e){
          $('.shirt-size .active').removeClass('active');
          $(this).addClass('active');
        });

        $('.color-list li span').on('click', function(e){
          $('.color-list .active').removeClass('active');
          $(this).addClass('active');
        });

        $('.shirt-type-select .dropdown-menu a').on('click', function(e){
          $('span.selected-type').text($(this).text());
        });
      })
    </script>
@stop