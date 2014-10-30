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
                    data-shadow="{{ URL::to('/') }}/images/shirt-templates/mens-standard/mens-standard-front-shadow.png" 
                    data-base="{{ URL::to('/') }}/images/shirt-templates/mens-standard/mens-standard-front-base.png" 
                    data-body="{{ URL::to('/') }}/images/shirt-templates/mens-standard/mens-standard-front-body.png" 
                    data-product="{{ asset('images/products/'.$product->image) }}" 
                    data-x="25" 
                    data-y="55">
                    </canvas>
                    <canvas class="canvas-template back" 
                    data-shadow="{{ URL::to('/') }}/images/shirt-templates/mens-standard/mens-standard-back-shadow.png" 
                    data-base="{{ URL::to('/') }}/images/shirt-templates/mens-standard/mens-standard-back-base.png" 
                    data-body="{{ URL::to('/') }}/images/shirt-templates/mens-standard/mens-standard-back-body.png" 
                    data-product="{{ asset('images/products/'.$product->image) }}" 
                    data-x="28" 
                    data-y="54">
                    </canvas>
                    <div class="preloader">
                    {{ HTML::image('images/loading-spinning-bubbles.svg', '', array('width' => '64','height' => '64')) }}
                    </div>
                    <img id="canvas-final" src="">
                </div>
              <!-- MENS-STANDARD -->
              

              <!-- MENS-STAPLE -->
              <div class="shirt-template" id="mens-staple">
                <canvas class="canvas-template" 
                data-shadow="{{ URL::to('/') }}/images/shirt-templates/mens-staple/mens-staple-front-shadow.png" 
                data-base="{{ URL::to('/') }}/images/shirt-templates/mens-staple/mens-staple-front-base.png" 
                data-body="{{ URL::to('/') }}/images/shirt-templates/mens-staple/mens-staple-front-body.png" 
                data-product="{{ asset('images/products/'.$product->image) }}" 
                data-x="23" 
                data-y="50">
                </canvas>
                <canvas class="canvas-template back" 
                data-shadow="{{ URL::to('/') }}/images/shirt-templates/mens-staple/mens-staple-back-shadow.png" 
                data-base="{{ URL::to('/') }}/images/shirt-templates/mens-staple/mens-staple-back-base.png" 
                data-body="{{ URL::to('/') }}/images/shirt-templates/mens-staple/mens-staple-back-body.png" 
                data-product="{{ asset('images/products/'.$product->image) }}" 
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
                data-shadow="{{ URL::to('/') }}/images/shirt-templates/mens-lowdown/mens-lowdown-front-shadow.png" 
                data-base="{{ URL::to('/') }}/images/shirt-templates/mens-lowdown/mens-lowdown-front-base.png" 
                data-body="{{ URL::to('/') }}/images/shirt-templates/mens-lowdown/mens-lowdown-front-body.png" 
                data-product="{{ asset('images/products/'.$product->image) }}" 
                data-x="26" 
                data-y="60"> 
                </canvas>
                <canvas class="canvas-template back" 
                data-shadow="{{ URL::to('/') }}/images/shirt-templates/mens-lowdown/mens-lowdown-back-shadow.png" 
                data-base="{{ URL::to('/') }}/images/shirt-templates/mens-lowdown/mens-lowdown-back-base.png" 
                data-body="{{ URL::to('/') }}/images/shirt-templates/mens-lowdown/mens-lowdown-back-body.png" 
                data-product="{{ asset('images/products/'.$product->image) }}"
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
                data-shadow="{{ URL::to('/') }}/images/shirt-templates/mens-barnard/mens-barnard-front-shadow.png" 
                data-base="{{ URL::to('/') }}/images/shirt-templates/mens-barnard/mens-barnard-front-base.png" 
                data-body="{{ URL::to('/') }}/images/shirt-templates/mens-barnard/mens-barnard-front-body.png" 
                data-product="{{ asset('images/products/'.$product->image) }}"
                data-x="32" 
                data-y="54">
                </canvas>
                <canvas class="canvas-template back" 
                data-shadow="{{ URL::to('/') }}/images/shirt-templates/mens-barnard/mens-barnard-back-shadow.png" 
                data-base="{{ URL::to('/') }}/images/shirt-templates/mens-barnard/mens-barnard-back-base.png" 
                data-body="{{ URL::to('/') }}/images/shirt-templates/mens-barnard/mens-barnard-back-body.png" 
                data-product="{{ asset('images/products/'.$product->image) }}"
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
                data-shadow="{{ URL::to('/') }}/images/shirt-templates/mens-tall/mens-tall-front-shadow.png" 
                data-base="{{ URL::to('/') }}/images/shirt-templates/mens-tall/mens-tall-front-base.png" 
                data-body="{{ URL::to('/') }}/images/shirt-templates/mens-tall/mens-tall-front-body.png" 
                data-product="{{ asset('images/products/'.$product->image) }}"
                data-x="28" 
                data-y="49">
                </canvas>
                <canvas class="canvas-template back" 
                data-shadow="{{ URL::to('/') }}/images/shirt-templates/mens-tall/mens-tall-back-shadow.png" 
                data-base="{{ URL::to('/') }}/images/shirt-templates/mens-tall/mens-tall-back-base.png" 
                data-body="{{ URL::to('/') }}/images/shirt-templates/mens-tall/mens-tall-back-body.png" 
                data-product="{{ asset('images/products/'.$product->image) }}"
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
                data-shadow="{{ URL::to('/') }}/images/shirt-templates/womens-standard/womens-standard-front-shadow.png" 
                data-base="{{ URL::to('/') }}/images/shirt-templates/womens-standard/womens-standard-front-base.png" 
                data-body="{{ URL::to('/') }}/images/shirt-templates/womens-standard/womens-standard-front-body.png" 
                data-product="{{ asset('images/products/'.$product->image) }}" 
                data-x="18" 
                data-y="58">
                </canvas>
                <canvas class="canvas-template back" 
                data-shadow="{{ URL::to('/') }}/images/shirt-templates/womens-standard/womens-standard-back-shadow.png" 
                data-base="{{ URL::to('/') }}/images/shirt-templates/womens-standard/womens-standard-back-base.png" 
                data-body="{{ URL::to('/') }}/images/shirt-templates/womens-standard/womens-standard-back-body.png" 
                data-product="{{ asset('images/products/'.$product->image) }}" 
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
                data-shadow="{{ URL::to('/') }}/images/shirt-templates/womens-tanktee/womens-tanktee-front-shadow.png" 
                data-base="{{ URL::to('/') }}/images/shirt-templates/womens-tanktee/womens-tanktee-front-base.png" 
                data-body="{{ URL::to('/') }}/images/shirt-templates/womens-tanktee/womens-tanktee-front-body.png" 
                data-product="{{ asset('images/products/'.$product->image) }}" 
                data-x="28" 
                data-y="55">
                </canvas>
                <canvas class="canvas-template back" 
                data-shadow="{{ URL::to('/') }}/images/shirt-templates/womens-tanktee/womens-tanktee-back-shadow.png" 
                data-base="{{ URL::to('/') }}/images/shirt-templates/womens-tanktee/womens-tanktee-back-base.png" 
                data-body="{{ URL::to('/') }}/images/shirt-templates/womens-tanktee/womens-tanktee-back-body.png" 
                data-product="{{ asset('images/products/'.$product->image) }}" 
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
                data-shadow="{{ URL::to('/') }}/images/shirt-templates/womens-mali/womens-mali-front-shadow.png" 
                data-base="{{ URL::to('/') }}/images/shirt-templates/womens-mali/womens-mali-front-base.png" 
                data-body="{{ URL::to('/') }}/images/shirt-templates/womens-mali/womens-mali-front-body.png" 
                data-product="{{ asset('images/products/'.$product->image) }}" 
                data-x="17" 
                data-y="58">
                </canvas>
                <canvas class="canvas-template back" 
                data-shadow="{{ URL::to('/') }}/images/shirt-templates/womens-mali/womens-mali-back-shadow.png" 
                data-base="{{ URL::to('/') }}/images/shirt-templates/womens-mali/womens-mali-back-base.png" 
                data-body="{{ URL::to('/') }}/images/shirt-templates/womens-mali/womens-mali-back-body.png" 
                data-product="{{ asset('images/products/'.$product->image) }}" 
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
                data-shadow="{{ URL::to('/') }}/images/shirt-templates/womens-dashracerback/womens-dashracerback-front-shadow.png" 
                data-base="{{ URL::to('/') }}/images/shirt-templates/womens-dashracerback/womens-dashracerback-front-base.png" 
                data-body="{{ URL::to('/') }}/images/shirt-templates/womens-dashracerback/womens-dashracerback-front-body.png" 
                data-product="{{ asset('images/products/'.$product->image) }}" 
                data-x="27" 
                data-y="61">
                </canvas>
                <canvas class="canvas-template back" 
                data-shadow="{{ URL::to('/') }}/images/shirt-templates/womens-dashracerback/womens-dashracerback-back-shadow.png" 
                data-base="{{ URL::to('/') }}/images/shirt-templates/womens-dashracerback/womens-dashracerback-back-base.png" 
                data-body="{{ URL::to('/') }}/images/shirt-templates/womens-dashracerback/womens-dashracerback-back-body.png" 
                data-product="{{ asset('images/products/'.$product->image) }}" 
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
                data-shadow="{{ URL::to('/') }}/images/shirt-templates/kids-tee/kids-tee-front-shadow.png" 
                data-base="{{ URL::to('/') }}/images/shirt-templates/kids-tee/kids-tee-front-base.png" 
                data-body="{{ URL::to('/') }}/images/shirt-templates/kids-tee/kids-tee-front-body.png" 
                data-product="{{ asset('images/products/'.$product->image) }}" 
                data-x="10" 
                data-y="55">
                </canvas>
                <canvas class="canvas-template back" 
                data-shadow="{{ URL::to('/') }}/images/shirt-templates/kids-tee/kids-tee-back-shadow.png" 
                data-base="{{ URL::to('/') }}/images/shirt-templates/kids-tee/kids-tee-back-base.png" 
                data-body="{{ URL::to('/') }}/images/shirt-templates/kids-tee/kids-tee-back-body.png" 
                data-product="{{ asset('images/products/'.$product->image) }}" 
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
                data-shadow="{{ URL::to('/') }}/images/shirt-templates/kids-mini/kids-mini-front-shadow.png" 
                data-base="{{ URL::to('/') }}/images/shirt-templates/kids-mini/kids-mini-front-base.png" 
                data-body="{{ URL::to('/') }}/images/shirt-templates/kids-mini/kids-mini-front-body.png" 
                data-product="{{ asset('images/products/'.$product->image) }}" 
                data-x="3" 
                data-y="42">
                </canvas>
                <canvas class="canvas-template back" 
                data-shadow="{{ URL::to('/') }}/images/shirt-templates/kids-mini/kids-mini-back-shadow.png" 
                data-base="{{ URL::to('/') }}/images/shirt-templates/kids-mini/kids-mini-back-base.png" 
                data-body="{{ URL::to('/') }}/images/shirt-templates/kids-mini/kids-mini-back-body.png" 
                data-product="{{ asset('images/products/'.$product->image) }}" 
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

              <div class="shirt-type shirt-type-select active-type" id="mens-type">
                <a data-toggle="dropdown" class="dropdown-toggle shirt-type" href="#"><span class="selected-type">{{ $men_shirttypes[0]->title }}</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                @if($men_shirttypes->count() > 0)
                  @foreach($men_shirttypes as $index => $men_shirttype)
                    <li><a href="javascript:void(0);" data-shirt="mens-{{ Str::lower($men_shirttype->title) }}"  data-id="{{ $men_shirttype->id }}">{{ $men_shirttype->title }}</a></li>
                  @endforeach
                @endif
                    <!-- <li><a href="javascript:void(0);" data-shirt="mens-staple">Staple</a></li>
                    <li><a href="javascript:void(0);" data-shirt="mens-lowdown">Lowdown</a></li>
                    <li><a href="javascript:void(0);" data-shirt="mens-barnard">Barnard</a></li>
                    <li><a href="javascript:void(0);" data-shirt="mens-tall">Tall</a></li> -->
                </ul>
              </div>

              <div class="shirt-type shirt-type-select" id="womens-type">
                <a data-toggle="dropdown" class="dropdown-toggle shirt-type" href="#"><span class="selected-type">Shirt Type</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    @if($women_shirttypes->count() > 0)
                      @foreach($women_shirttypes as $index => $women_shirttype)
                        <li><a href="javascript:void(0);" data-shirt="womens-<?php echo strtolower(str_replace(" ", "",$women_shirttype->title)); ?>"  data-id="{{ $women_shirttype->id }}">{{ $women_shirttype->title }}</a></li>
                      @endforeach
                    @endif
                  <!-- <li><a href="javascript:void(0);" data-shirt="womens-standard">Standard</a></li>
                  <li><a href="javascript:void(0);" data-shirt="womens-tanktee">Tank Tee</a></li>
                  <li><a href="javascript:void(0);" data-shirt="womens-mali">Mali</a></li>
                  <li><a href="javascript:void(0);" data-shirt="womens-dashracerback">Dash Racerback</a></li> -->
                </ul>
              </div>

              <div class="shirt-type shirt-type-select" id="kids-type">
                <a data-toggle="dropdown" class="dropdown-toggle shirt-type" href="#"><span class="selected-type">Shirt Type</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    @if($kid_shirttypes->count() > 0)
                      @foreach($kid_shirttypes as $index => $kid_shirttype)
                        <li><a href="javascript:void(0);" data-shirt="kids-{{ Str::lower($kid_shirttype->title) }}"  data-id="{{ $kid_shirttype->id }}">{{ $kid_shirttype->title }}</a></li>
                      @endforeach
                    @endif
                  <!-- <li><a href="javascript:void(0);" data-shirt="kids-tee">Kids Tee</a></li>
                  <li><a href="javascript:void(0);" data-shirt="kids-mini">Kids Mini</a></li> -->
                </ul>
              </div>
              
              <div class="shirt-size">
                @if($men_standard_sizes->count() > 0)
                  @foreach($men_standard_sizes as $index => $men_standard_size)
                    <a href="javascript:void(0);" @if($index==1) class="active" @endif>{{ $men_standard_size->title }}</a>
                  @endforeach
                @endif
              </div>
              <div class="shirt-chart">
                <a href="" class="size-chart">SIZING CHART</a>
              </div>
              <div class="shirt-color">
                <h6>Select a colour</h6>
                <ul class="color-list">
                @if($men_standard_colours->count() > 0)
                  @foreach($men_standard_colours as $index => $men_standard_colour)
                    <li><span class="color-option @if($index==0)active@endif" id="{{ $men_standard_colour->name }}" data-color="{{ $men_standard_colour->hex_value }}" style="background-color: {{ $men_standard_colour->hex_value }}"></span></li>
                  @endforeach
                @endif
                </ul>  
              </div>
              <div class="shirt-view">
                <a href="" class="active front">FRONT</a>
                <span>or</span>
                <a href="" class="back">BACK</a>
                <span class="price">${{ $men_standard_shirttype->price }}</span>
              </div>
              <div class="shirt-back-checkbox">
                <input type="checkbox" name="print_back"><p>Do you want a print at the back of the shirt?</p>
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
            <a href="{{ URL::to('product', array(Product::slug($related_product->title), $related_product->id)) }}">{{ HTML::image('images/products/thumbs/'.$related_product->thumbnail_image, '', array('style'=>'width:198px;height:198px;')) }}</a>
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
              <div class="final-product-image"></div>
              <!-- <img src="images/image-placeholder1.png" style="width:150px;height:100px;"> -->
              <div class="form-group">
                <a href="{{ route('checkout') }}"><button class="btn btn-primary checkout">CHECKOUT NOW</button></a>
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


    <!-- SIZE CHART MODAL -->
    <div class="modal fade" id="size-chart-modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            
            <div class="chart-wrap">
                
            </div>

          </div>
        </div>
      </div>
    </div>

    {{ HTML::script('js/admin/jquery-1.10.2.min.js') }}
    {{ HTML::script('js/shirt.js') }}
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
          'price' : $('.price').text(),
          'qty' : 1,
          'attr' : {
            'description': '{{ $product->description }}',
            'size' : 'M',
            'color' : 'Black'
          }
        };


        $('.shirt-back-checkbox').children('input[name="print_back"]').on('click', function(e) {
            if ($(this).is(':checked')) {
                var includedBackPrintPrice = parseInt($('.price').text().replace("$", "")) + 6;
                $('.price').text('$'+parseFloat(includedBackPrintPrice).toFixed(2)); // fixed for all shirt type back print may be added into table later
            }else {
                var excludedBackPrintPrice = parseInt($('.price').text().replace("$", "")) - 6;
                $('.price').text('$'+parseFloat(excludedBackPrintPrice).toFixed(2)); // fixed for all shirt type back print may be added into table later
            }
        });
        
        var request;
        $('.addtocart-link').on('click', function(e){
          addToCartJSON.qty = $('.qty').val();
          addToCartJSON.price = $('.price').text().replace("$", "");
          addToCartJSON.attr.size = $('.shirt-size .active').text();
          addToCartJSON.attr.color = $('.color-list .active').data('color');
          addToCartJSON.attr.shirt_type = $('.active-type').find('.shirt-type').text();
          addToCartJSON.attr.image = $('.final-product-image').children('img').attr('src');

          if($('.shirt-back-checkbox').children('input[name="print_back"]').is(':checked')) {
            addToCartJSON.attr.print_back = true;
          }else {
            addToCartJSON.attr.print_back = false;
          }

          console.log(addToCartJSON);

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

        //OPEN SIZE CHART MODAL
        $('.size-chart').on('click', function(e){
            e.preventDefault();
            $('#size-chart-modal').modal('show');
            var shirt_type = $('.shirt-template.active').attr("id");
            if(shirt_type == 'mens-standard'){
                img = '{{ HTML::image("images/shirt-chart/chart-mens-standard.jpg") }}';
                $('.chart-wrap').html(img);        
            }else if(shirt_type == 'mens-staple'){
                img = '{{ HTML::image("images/shirt-chart/chart-standard-tee.jpg") }}';
                $('.chart-wrap').html(img);  
            }else if(shirt_type == 'mens-lowdown'){
                img = '{{ HTML::image("images/shirt-chart/chart-lowdown.jpg") }}';
                $('.chart-wrap').html(img);  
            }else if(shirt_type == 'mens-barnard'){
                img = '{{ HTML::image("images/shirt-chart/chart-barnard.jpg") }}';
                $('.chart-wrap').html(img);  
            }else if(shirt_type == 'mens-tall'){
                img = '{{ HTML::image("images/shirt-chart/chart-tall.jpg") }}';
                $('.chart-wrap').html(img);  
            }else if(shirt_type == 'womens-standard'){
                img = '{{ HTML::image("images/shirt-chart/chart-womens-standard.jpg") }}';
                $('.chart-wrap').html(img);  
            }else if(shirt_type == 'womens-tanktee'){
                img = '{{ HTML::image("images/shirt-chart/chart-tank-tee.jpg") }}';
                $('.chart-wrap').html(img);  
            }else if(shirt_type == 'womens-mali'){
                img = '{{ HTML::image("images/shirt-chart/chart-mali.jpg") }}';
                $('.chart-wrap').html(img);  
            }else if(shirt_type == 'womens-dashracerback'){
                img = '{{ HTML::image("images/shirt-chart/chart-racerback.jpg") }}';
                $('.chart-wrap').html(img);  
            }else if(shirt_type == 'kids-tee'){
                img = '{{ HTML::image("images/shirt-chart/chart-kids-tee.jpg") }}';
                $('.chart-wrap').html(img);  
            }else if(shirt_type == 'kids-mini'){
                img = '{{ HTML::image("images/shirt-chart/chart-mini-onepiece.jpg") }}';
                $('.chart-wrap').html(img);  
            }




        });

    })
    </script>
@stop