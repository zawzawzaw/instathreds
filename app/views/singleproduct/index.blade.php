@section('content')

    <!-- facebook -->
    <div id="fb-root"></div>

	<!-- BANNER/SLIDER -->
    <section class="slider">
      <div class="container">
        <div class="offers-bar">
          <a href="{{ route('store.featured') }}"><h6><span>NEW FEATURED DESIGNS!</span> SHOP NOW</h6></a>  
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
                <?php 
                $one = array('front'=>array('x'=>25, 'y'=>55), 'back'=>array('x'=>28, 'y'=>54));
                $two = array('front'=>array('x'=>23, 'y'=>50), 'back'=>array('x'=>30, 'y'=>58));
                $three = array('front'=>array('x'=>26, 'y'=>60), 'back'=>array('x'=>37, 'y'=>66));
                $four = array('front'=>array('x'=>32, 'y'=>54), 'back'=>array('x'=>37, 'y'=>57));
                $five = array('front'=>array('x'=>28, 'y'=>49), 'back'=>array('x'=>31, 'y'=>52));
                $six = array('front'=>array('x'=>18, 'y'=>58), 'back'=>array('x'=>24, 'y'=>56));
                $seven = array('front'=>array('x'=>28, 'y'=>55), 'back'=>array('x'=>35, 'y'=>73));
                $eight = array('front'=>array('x'=>17, 'y'=>58), 'back'=>array('x'=>22, 'y'=>58));
                $nine = array('front'=>array('x'=>27, 'y'=>61), 'back'=>array('x'=>33, 'y'=>59));
                $ten = array('front'=>array('x'=>10, 'y'=>55), 'back'=>array('x'=>16, 'y'=>59));
                $eleven = array('front'=>array('x'=>3, 'y'=>42), 'back'=>array('x'=>4, 'y'=>33));

                $xy[] = $one;
                $xy[] = $two;
                $xy[] = $three;
                $xy[] = $four;
                $xy[] = $five;
                $xy[] = $six;
                $xy[] = $seven;
                $xy[] = $eight;
                $xy[] = $nine;
                $xy[] = $ten;
                $xy[] = $eleven;
                ?>

                @foreach ($all_shirttypes as $key => $shirt_type)
                    <div class="shirt-template @if($key==0) {{ 'active' }} @endif" id="{{ Str::lower($shirt_type->gender->title) }}-{{ strtolower($shirt_type->filename) }}">
                        <canvas class="canvas-template" 
                        data-shadow="{{ URL::to('/') }}/images/shirt-templates/{{ Str::lower($shirt_type->gender->title) }}-{{ strtolower($shirt_type->filename) }}/{{ Str::lower($shirt_type->gender->title) }}-{{ strtolower($shirt_type->filename) }}-front-shadow.png" 
                        data-base="{{ URL::to('/') }}/images/shirt-templates/{{ Str::lower($shirt_type->gender->title) }}-{{ strtolower($shirt_type->filename) }}/{{ Str::lower($shirt_type->gender->title) }}-{{ strtolower($shirt_type->filename) }}-front-base.png" 
                        data-body="{{ URL::to('/') }}/images/shirt-templates/{{ Str::lower($shirt_type->gender->title) }}-{{ strtolower($shirt_type->filename) }}/{{ Str::lower($shirt_type->gender->title) }}-{{ strtolower($shirt_type->filename) }}-front-body.png" 
                        data-product="{{ asset('images/products/'.$product->image) }}" 
                        data-x="{{ $xy[$key]['front']['x'] }}" 
                        data-y="{{ $xy[$key]['front']['y'] }}">
                        </canvas>
                        <canvas class="canvas-template back" 
                        data-shadow="{{ URL::to('/') }}/images/shirt-templates/{{ Str::lower($shirt_type->gender->title) }}-{{ strtolower($shirt_type->filename) }}/{{ Str::lower($shirt_type->gender->title) }}-{{ strtolower($shirt_type->filename) }}-back-shadow.png" 
                        data-base="{{ URL::to('/') }}/images/shirt-templates/{{ Str::lower($shirt_type->gender->title) }}-{{ strtolower($shirt_type->filename) }}/{{ Str::lower($shirt_type->gender->title) }}-{{ strtolower($shirt_type->filename) }}-back-base.png" 
                        data-body="{{ URL::to('/') }}/images/shirt-templates/{{ Str::lower($shirt_type->gender->title) }}-{{ strtolower($shirt_type->filename) }}/{{ Str::lower($shirt_type->gender->title) }}-{{ strtolower($shirt_type->filename) }}-back-body.png" 
                        data-product="{{ asset('images/products/'.$product->image) }}" 
                        data-x="{{ $xy[$key]['back']['x'] }}" 
                        data-y="{{ $xy[$key]['back']['y'] }}">
                        </canvas>
                        <div class="preloader">
                        {{ HTML::image('images/loading-spinning-bubbles.svg', '', array('width' => '64','height' => '64')) }}
                        </div>
                        <img id="canvas-final" src="">
                    </div>
                @endforeach
            </div>
            <div class="right">
              <h6 class="product-title">{{ Str::upper($product->title) }}</h6>

              <div class="shirt-type shirt-type-select active-type" id="mens-type">
                <a data-toggle="dropdown" class="dropdown-toggle shirt-type" href="#"><span class="selected-type">{{ $men_shirttypes[0]->title }}</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                @if($men_shirttypes->count() > 0)
                  @foreach($men_shirttypes as $index => $men_shirttype)
                    <li><a href="javascript:void(0);" data-shirt="mens-{{ strtolower($men_shirttype->filename) }}"  data-id="{{ $men_shirttype->id }}">{{ $men_shirttype->title }}</a></li>
                  @endforeach
                @endif
                </ul>
              </div>

              <div class="shirt-type shirt-type-select" id="womens-type">
                <a data-toggle="dropdown" class="dropdown-toggle shirt-type" href="#"><span class="selected-type">Shirt Type</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    @if($women_shirttypes->count() > 0)
                      @foreach($women_shirttypes as $index => $women_shirttype)
                        <li><a href="javascript:void(0);" data-shirt="womens-{{ strtolower($women_shirttype->filename) }}"  data-id="{{ $women_shirttype->id }}">{{ $women_shirttype->title }}</a></li>
                      @endforeach
                    @endif
                </ul>
              </div>

              <div class="shirt-type shirt-type-select" id="kids-type">
                <a data-toggle="dropdown" class="dropdown-toggle shirt-type" href="#"><span class="selected-type">Shirt Type</span> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    @if($kid_shirttypes->count() > 0)
                      @foreach($kid_shirttypes as $index => $kid_shirttype)
                        <li><a href="javascript:void(0);" data-shirt="kids-{{ Str::lower($kid_shirttype->filename) }}"  data-id="{{ $kid_shirttype->id }}">{{ $kid_shirttype->title }}</a></li>
                      @endforeach
                    @endif
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
              <!-- <div class="shirt-back-checkbox">
                <input type="checkbox" name="print_back"><p>Do you want a print at the back of the shirt?</p>
              </div> -->
              <div class="shirt-quantity">
                  <input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">
                  <a href="#cart-modal" class="addtocart-link btn btn-primary">ADD TO CART</a>
              </div>
              <div class="share">
                <h6>SHARE WITH FRIENDS</h6>  
                <a href="" target="_blank" class="social-icons facebook"><i class="fa fa-facebook"></i></a> 
                <a href="https://twitter.com/share?url={{ Request::url() }}" target="_blank" class="social-icons twitter"><i class="fa fa-twitter"></i></a>
                <a href="https://pinterest.com/pin/create/button/?url={{ Request::url() }}&media={{ asset('images/products/'.$product->image) }}&description=
" target="_blank" class="social-icons"><i class="fa fa-pinterest"></i></a>


                <a href="mailto:enteryour@addresshere.com?subject=Instathred&amp;body=Check%20this%20out:%20{{ Request::url() }}" target="_blank" class="social-icons"><i class="fa fa-envelope"></i></a>
              </div>
            </div>
          </div>  
          
         
      </div>
    </section>

    <section class="more-products">
      <div class="container">
        <h6>ALSO IN {{ Str::upper($category->name) }}</h6>  
        <div class="more-products-slider owl-carousel">
          @foreach($related_products as $related_product)
          <div class="item">
            <a href="{{ URL::to('product', array(Product::slug($related_product->title), $related_product->id)) }}">{{ HTML::image('images/products/thumbs/'.$related_product->thumbnail_image, '', array('style'=>'width:198px;height:198px;')) }}</a>
            <a href="{{ URL::to('product', array(Product::slug($related_product->title), $related_product->id)) }}" class="product-title">{{ $related_product->title }}</a>
          </div>
          @endforeach
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


            /*$('.shirt-back-checkbox').children('input[name="print_back"]').on('click', function(e) {
                if ($(this).is(':checked')) {
                    var includedBackPrintPrice = parseInt($('.price').text().replace("$", "")) + 6;
                    $('.price').text('$'+parseFloat(includedBackPrintPrice).toFixed(2)); // fixed for all shirt type back print may be added into table later
                }else {
                    var excludedBackPrintPrice = parseInt($('.price').text().replace("$", "")) - 6;
                    $('.price').text('$'+parseFloat(excludedBackPrintPrice).toFixed(2)); // fixed for all shirt type back print may be added into table later
                }
            });*/
            
            var request;
            $('.addtocart-link').on('click', function(e){
              addToCartJSON.qty = $('.qty').val();
              addToCartJSON.price = $('.price').text().replace("$", "");
              addToCartJSON.attr.gender = $('.gender').find('.active').attr('id');
              addToCartJSON.attr.size = $('.shirt-size .active').text();
              addToCartJSON.attr.color = $('.color-list .active').data('color');
              addToCartJSON.attr.shirt_type = $('.active-type').find('.shirt-type').text();
              
              console.log($('.shirt-view').children('.active').text())

              if($('.shirt-view').children('.active').text()=="BACK") {
                addToCartJSON.attr.image = '';
                addToCartJSON.attr.back_image = $('.final-product-image').children('img').attr('src');
              }else {
                addToCartJSON.attr.image = $('.final-product-image').children('img').attr('src');
                addToCartJSON.attr.back_image = '';
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

            //FACEBOOK SHARE
            // appId: 484327941698435
            window.fbAsyncInit = function() {
            FB.init({
              appId      : '484327941698435',
              xfbml      : true,
              version    : 'v2.1'
            });
            };

            (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "//connect.facebook.net/en_US/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
            
            var productimage = 'http://instathreds.co/images/products/{{ HTML::decode($product->image) }}';
            productimage = encodeURI( productimage );
            console.log(productimage);

            $('.social-icons.facebook').on('click', function(e){
                e.preventDefault();
                FB.ui(
                 {
                    method: 'feed',
                    name: 'Instathreds | {{ Str::upper($product->title) }}',
                    link: '{{ Request::url() }}',
                    picture: productimage,
                    caption: 'Check out this shirt design in Instathreds!',
                    description: 'This is the description.',
                    message: ''
                }, function(response){});
            });

            

        });
    </script>
@stop