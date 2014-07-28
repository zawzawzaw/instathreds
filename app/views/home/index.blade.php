@section('content')
	<!-- <p class="welcome">{{{ !empty($username) ? 'Welcome ' . $username . ',' : '' }}}</p> -->
	<!-- BANNER/SLIDER -->
    <section class="slider">
      <div class="container">
        <div class="offers-bar">
          <h6><span>NEW FEATURED DESIGNS!</span> SHOP NOW</h6>  
        </div>
        <div class="banner hide-mobile">
          <div id="carousel">
            <div class="slide">
              <a href=""><img src="images/slider/image-banner2.jpg" /></a>
              <div class="captions">
                <div class="text1">Make Your Own</div>
                <div class="text2">BUILD FROM SCRATCH<br>OR UPLOAD YOUR OWN PHOTOS OR ARTWORK</div>
              </div>
            </div>
            <div class="slide">
              <a href=""><img src="images/slider/image-banner1.jpg" /></a>
            </div>
          </div>
          <div style="float:none;clear:both;">
          <a href="#" id="prev-banner" class="left carousel-control">
            <i class="fa fa-angle-left"></i>
          </a>
          <a href="#" id="next-banner" class="right carousel-control">
            <i class="fa fa-angle-right"></i>
          </a>
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
            <a href=""><img src="images/image-placeholder1.png"></a>
            <div class="title step1">
              <a href="">Make Your Own T-Shirt</a>
            </div>
            
          </li>
          <li>
            <a href=""><img src="images/image-placeholder2.png"></a>
            <div class="title step2">
              <a href="">Choose a Design</a>
            </div>
          </li>
          <li>
            <a href=""><img src="images/image-placeholder1.png"></a>
            <div class="title step3">
              <a href="">Signup and Sell T-Shirts</a>
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
          <a href=""><img src="images/slider/image-banner2.jpg" /></a>
          <div class="captions">
            <div class="text1">Promo</div>
            <div class="text2">PROMO<br>DESCRIPTION<br>GOES HERE</div>
          </div>
        </div>

      </div>  
    </section>
@stop