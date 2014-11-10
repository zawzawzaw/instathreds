@section('slider')
	<!-- <p class="welcome">{{{ !empty($username) ? 'Welcome ' . $username . ',' : '' }}}</p> -->
	<!-- BANNER/SLIDER -->
    <section class="slider">
      <div class="container">
        <div class="offers-bar">
          <a href="{{ route('store.featured') }}"><h6><span>NEW FEATURED DESIGNS!</span> SHOP NOW</h6></a>  
        </div>
        <div class="banner hide-mobile">
          <div id="slider-homepage" class="owl-carousel">
            <div class="slide">
              <a href="{{ route('shirtbuilder.index') }}"><img src="images/slider/slider1.jpg" /></a>
              <div class="captions">
                <div class="text1">Make Your Own</div>
                <div class="text2">BUILD FROM SCRATCH<br>OR UPLOAD YOUR OWN PHOTOS OR ARTWORK</div>
              </div>
            </div>
            <div class="slide">
              <a href="{{ route('store.index') }}"><img src="images/slider/slider2.jpg" /></a>
              <div class="captions">
                <div class="text1">CHOOSE A DESIGN</div>
              </div>
            </div>
            <div class="slide">
              <a href="" class="storeloc-link"><img src="images/slider/slider3.jpg" /></a>
              <div class="captions">
                <div class="text1">VISIT OUR STORES</div>
              </div>
            </div>
            <div class="slide">
              <a href="{{ URL::route('static.calldesigners') }}"><img src="images/slider/slider4.jpg" /></a>
              <div class="captions">
                <div class="text1">CALLING ALL DESIGNERS</div>
              </div>
            </div>
            <div class="slide">
              <a href="{{ route('store.featured') }}"><img src="images/slider/slider5.jpg" /></a>
              <div class="captions">
                <div class="text1">FEATURED DESIGNS</div>
              </div>
            </div>
            
          </div>
          
        </div>
      </div>
    </section>
    <!-- END BANNER/SLIDER -->
@stop

@section('howitworks')
    <!-- HOW IT WORKS -->
    <section class="howitworks">
      <div class="container">
        <div class="section-bar">
          <h6>HOW IT WORKS</h6>  
        </div> 
        <ul class="block-grid three-up mobile steps">
          <li>
            <a href="{{ route('shirtbuilder.index') }}"><img src="images/howitworks1.jpg"></a>
            <div class="title step1">
              <a href="{{ route('shirtbuilder.index') }}">Make Your Own T-Shirt</a>
            </div>
            
          </li>
          <li>
            <a href="{{ route('store.featured') }}"><img src="images/howitworks2.jpg"></a>
            <div class="title step2">
              <a href="{{ route('store.featured') }}">Choose a Design</a>
            </div>
          </li>
          <li>
            <a href="{{ URL::route('static.calldesigners') }}"><img src="images/howitworks3.jpg"></a>
            <div class="title step3">
              <a href="{{ URL::route('static.calldesigners') }}">Signup and Sell T-Shirts</a>
            </div>
          </li>  
        </ul> 
      </div>  
    </section>
@stop

@section('recentdesigns')
    <!-- RECENT DESIGNS -->
    <section class="recentdesigns">
      <div class="container">
        <div class="section-bar">
          <h6 class="hide-mobile">CHECK OUT THESE RECENT DESIGNS | <a href="{{ route('store.featured') }}">VIEW ALL CATEGORIES</a></h6>  
          <h6 class="show-mobile">RECENT DESIGNS<br><a href="{{ route('store.featured') }}">VIEW ALL CATEGORIES</a></h6>  
        </div>
        <ul class="block-grid five-up mobile designs">
          @foreach($products as $product)
            <li>
              <a href="{{ URL::to('product', array(Product::slug($product->title), $product->id)) }}">{{ HTML::image('images/products/thumbs/'.$product->thumbnail_image) }}</a>
            </li>
          @endforeach
          
          <!-- <li>
            <a href=""><img src="images/products/thumbs/Pixel People-02.png"></a>
          </li>
          <li>
            <a href=""><img src="images/products/thumbs/Pixel People-03.png"></a>
          </li>
          <li>
            <a href=""><img src="images/products/thumbs/Pixel People-04.png"></a>
          </li>
          <li>
            <a href=""><img src="images/products/thumbs/Pixel People-05.png"></a>
          </li>
          <li>
            <a href=""><img src="images/products/thumbs/Pixel People-06.png"></a>
          </li>
          <li>
            <a href=""><img src="images/products/thumbs/Pixel People-07.png"></a>
          </li>
          <li>
            <a href=""><img src="images/products/thumbs/Pixel People-08.png"></a>
          </li>
          <li>
            <a href=""><img src="images/products/thumbs/Pixel People-09.png"></a>
          </li>
          <li>
            <a href=""><img src="images/products/thumbs/Pixel People-10.png"></a>
          </li> -->
        </ul>    
      </div>  
    </section>

    <!-- PROMOTIONAL AREA -->
    <section class="promotional-area hide-mobile">
      <div class="container">
        <div class="section-bar">
          <h6>CURRENT PROMOTIONS | <a href="">CLICK HERE</a></h6>  
        </div>
        <div class="banner promotion">
          <a href="http://instathreds.co/store/Moustaches/35">{{ HTML::image('images/promo/promo1.png') }}
          <div class="captions">
            <div class="text1">SHOW YOUR MO</div>
            <div class="text2">WEAR YOUR SUPPORT THIS MOVEMBER & CHOOSE THESE GREAT MO DESIGNS</div>
          </div>
          </a>
        </div>

      </div>  
    </section>
@stop