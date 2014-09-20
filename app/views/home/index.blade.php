@section('content')
	<!-- <p class="welcome">{{{ !empty($username) ? 'Welcome ' . $username . ',' : '' }}}</p> -->
	<!-- BANNER/SLIDER -->
    <section class="slider">
      <div class="container">
        <div class="offers-bar">
          <h6><span>NEW FEATURED DESIGNS!</span> SHOP NOW</h6>  
        </div>
        <div class="banner hide-mobile">
          <div id="slider-homepage" class="owl-carousel">
            <div class="slide">
              <a href=""><img src="images/slider/slider1.jpg" /></a>
              <div class="captions">
                <div class="text1">Make Your Own</div>
                <div class="text2">BUILD FROM SCRATCH<br>OR UPLOAD YOUR OWN PHOTOS OR ARTWORK</div>
              </div>
            </div>
            <div class="slide">
              <a href=""><img src="images/slider/slider2.jpg" /></a>
              <div class="captions">
                <div class="text1">CHOOSE A DESIGN</div>
              </div>
            </div>
            <div class="slide">
              <a href=""><img src="images/slider/slider3.jpg" /></a>
              <div class="captions">
                <div class="text1">VISIT OUR STORES</div>
              </div>
            </div>
            <div class="slide">
              <a href=""><img src="images/slider/slider4.jpg" /></a>
              <div class="captions">
                <div class="text1">CALLING ALL DESIGNERS</div>
              </div>
            </div>
            <div class="slide">
              <a href=""><img src="images/slider/slider5.jpg" /></a>
              <div class="captions">
                <div class="text1">FEATURED DESIGNS</div>
              </div>
            </div>
            
          </div>
          
        </div>
      </div>
    </section>
    <!-- END BANNER/SLIDER -->

    <!-- HOW IT WORKS -->
    <section class="howitworks">
      <div class="container">
        <div class="section-bar">
          <h6>HOW IT WORKS</h6>  
        </div> 
        <ul class="block-grid three-up mobile steps">
          <li>
            <a href="/shirtbuilder"><img src="images/howitworks1.jpg"></a>
            <div class="title step1">
              <a href="/shirtbuilder">Make Your Own T-Shirt</a>
            </div>
            
          </li>
          <li>
            <a href=""><img src="images/howitworks2.jpg"></a>
            <div class="title step2">
              <a href="">Choose a Design</a>
            </div>
          </li>
          <li>
            <a href="#login-modal" class="user-account-btn" data-id="signup"><img src="images/howitworks3.jpg"></a>
            <div class="title step3">
              <a href="#login-modal" class="user-account-btn" data-id="signup">Signup and Sell T-Shirts</a>
            </div>
          </li>  
        </ul> 
      </div>  
    </section>

    <!-- RECENT DESIGNS -->
    <section class="recentdesigns">
      <div class="container">
        <div class="section-bar">
          <h6 class="hide-mobile">CHECK OUT THESE RECENT DESIGNS | <a href="">VIEW ALL</a> | <a href="">CATEGORIES</a></h6>  
          <h6 class="show-mobile">RECENT DESIGNS<br><a href="">VIEW ALL</a> | <a href="">CATEGORIES</a></h6>  
        </div>
        <ul class="block-grid five-up mobile designs">
          <li>
            <a href=""><img src="images/image-placeholder1.png"></a>
          </li>
          <li>
            <a href=""><img src="images/image-placeholder2.png"></a>
          </li>
          <li>
            <a href=""><img src="images/image-placeholder1.png"></a>
          </li>
          <li>
            <a href=""><img src="images/image-placeholder2.png"></a>
          </li>
          <li>
            <a href=""><img src="images/image-placeholder1.png"></a>
          </li>
          <li>
            <a href=""><img src="images/image-placeholder2.png"></a>
          </li>
          <li>
            <a href=""><img src="images/image-placeholder1.png"></a>
          </li>
          <li>
            <a href=""><img src="images/image-placeholder2.png"></a>
          </li>
          <li>
            <a href=""><img src="images/image-placeholder1.png"></a>
          </li>
          <li>
            <a href=""><img src="images/image-placeholder2.png"></a>
          </li>
        </ul>    
      </div>  
    </section>

    <!-- PROMOTIONAL AREA -->
    <section class="promotional-area hide-mobile">
      <div class="container">
        <div class="section-bar">
          <h6>OTHER PROMOTIONAL AREA | <a href="">PROMO LINK</a></h6>  
        </div>
        <div class="banner promotion">
          <a href=""><img src="images/promo/promo1.png" /></a>
          <div class="captions">
            <div class="text1">Promo</div>
            <div class="text2">PROMO<br>DESCRIPTION<br>GOES HERE</div>
          </div>
        </div>

      </div>  
    </section>
@stop