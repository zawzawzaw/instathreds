<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Instathreds</title>

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/screen.css">

    <!-- TYPEKIT -->
    <script type="text/javascript" src="//use.typekit.net/qcf3jnv.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>  

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- PRELOADER -->
    <div id="preloader">
        <div id="status"><img src="images/preloader.gif"></div>
    </div>

    <nav class="mobile-menu-items">
      <ul>
        <li>
          <div class="search-form-mobile">
              <input type="text" class="search-input" placeholder="SEARCH">
              <button class="button-search"><i class="fa fa-search"></i></button>
          </div>    
        </li>
        <li>
          <a href="login-mobile.php"><img class="img-userprofile" src="images/userprofile.png" width="100">Login/Signup</a>  
        </li>
        <li>
          <div class="menu-cart-mobile">
            <a href=""><i class="fa fa-shopping-cart"></i><span>2 items in your cart<span></a>
          </div>
        </li>
        <li><a href="">Make Your Own</a></li>
        <li><a href="">Choose a Design</a></li>
        <li><a href="">Stores</a></li>
        <li><a href="">Blog</a></li>
        <li><a href="">How To</a></li>
        <li><a href="">Size Guide</a></li>
        <li><a href="">Pricing</a></li>
        <li><a href="">Bulk Orders</a></li>
        <li><a href="">FAQs</a></li>
        <li><a href="">Help</a></li>
        
        
      </ul>
    </nav>

    
    <!-- HEADER -->
    <section class="header">
      <!-- top header -->
      <div class="header-top">
        <div class="container">
            <div class="float-left">
              <h6 class="contact-us"><span>CONTACT US</span> 1300 468 453</h6>
            </div>
            <div class="search-form">
                <input type="text" class="search-input" placeholder="SEARCH">
                <button class="button-search"><i class="fa fa-search"></i></button>
            </div>
            <div class="social">
              <a href="" class="icon"><i class="fa fa-facebook"></i></a>
              <a href="" class="icon"><i class="fa fa-instagram"></i></a>
              <a href="" class="icon"><i class="fa fa-twitter"></i></a>
              <a href="" class="icon"><i class="fa fa-pinterest"></i></a>
              <a href="" class="icon"><i class="fa fa-youtube"></i></a>  
            </div>
        </div>      
      </div>
      <!-- end top header -->

      <!-- menu header -->
      <div class="header-main">
        <div class="container">
          <div class="logo">
            <a href=""><img src="images/logo-instathreds.png" alt="Logo" /></a>
          </div>
          <div class="mobile-menu burger slide" id="navToggle"  >
            <a href="#"><i class="fa fa-bars"></i></a>
          </div>
          
          <div class="navigation-menu">
            <div class="menu-main">
              <ul>
                <li><a href="">Make Your Own</a></li>
                <li><a href="">Choose a Design</a></li>
                <li>
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">Blog</a>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                    <li role="presentation"><a href="http://twitter.com/fat" tabindex="-1" role="menuitem">Action</a></li>
                    <li role="presentation"><a href="http://twitter.com/fat" tabindex="-1" role="menuitem">Action</a></li>
                    <li role="presentation"><a href="http://twitter.com/fat" tabindex="-1" role="menuitem">Another action</a></li>
                    <li role="presentation"><a href="http://twitter.com/fat" tabindex="-1" role="menuitem">Something else here</a></li>
                    <li role="presentation"><a href="http://twitter.com/fat" tabindex="-1" role="menuitem">Separated link</a></li>
                  </ul>
                </li>
                <li><a href="">Stores</a></li>
              </ul>
            </div>
            <div class="menu-cart">
              <a href=""><i class="fa fa-shopping-cart"></i><span>2<span></a>
            </div>
            <div class="menu-login">
              <ul>
                <li><a href="#login-modal" class="login-link" data-id="login">Login</a></li>
                <li><a href="#login-modal" class="signup-link" data-id="signup">Signup</a></li>  
              </ul>  
            </div>
          </div>
        </div>
        
      </div>
      <!-- end menu header -->
    </section>  
    <!-- END HEADER -->

    <!-- BANNER/SLIDER -->
    <section class="slider">
      <div class="container">
        <div class="offers-bar">
          <h6><span>NEW FEATURED DESIGNS!</span> SHOP NOW</h6>  
        </div>
        <div class="banner hide-mobile">
          <div id="slider-homepage" class="owl-carousel">
            <div class="slide">
              <a href=""><img src="images/slider/image-banner2.jpg" /></a>
              <div class="captions">
                <div class="text1">Make Your Own</div>
                <div class="text2">BUILD FROM SCRATCH<br>OR UPLOAD YOUR OWN PHOTOS OR ARTWORK</div>
              </div>
            </div>
            <div class="slide">
              <a href=""><img src="images/slider/image-banner1.jpg" /></a>
              <div class="captions">
                <div class="text1">Make Your Own</div>
                <div class="text2">BUILD FROM SCRATCH<br>OR UPLOAD YOUR OWN PHOTOS OR ARTWORK</div>
              </div>
            </div>
          </div>
          <div style="float:none;clear:both;display:none;">
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
            <a href=""><img src="images/products/thumbs/Pixel People-01.png"></a>
          </li>
          <li>
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

    <!-- FOOTER -->
    <section class="footer">
      <div class="container">
        <div class="row">
          <div class="twelve column">
            <ul class="footer-info footer-info-top">
              <li>  
                <div class="newsletter-signup">
                  <h6>SIGNUP FOR OUR NEWSLETTER</h6>
                  <input type="text" class="text">
                  <button class="btn btn-primary">JOIN</button>
                  
                </div>
                <div class="subscribe-rss">
                  <a href="" class="icon-other">
                  <i class="fa fa-rss"></i>SUBSCRIBE TO OUR BLOG</a>
                </div>
              </li>
              <li>
                <p style="font-weight:bold;">
                InstaThreds P/L<br>
                CONTACT US: 1300 469 453<br>
                PRINT ORDERS: <a href="mailto:print@instathreds.com">print@instathreds.com</a><br>
                GENERAL ENQUIRIES: <a href="mailto:info@instathreds.com">info@instathreds.com</a>
                </p>
              </li>
              <li>
                  <div class="social social-footer">
                    <a href="" class="icon"><i class="fa fa-facebook"></i></a>
                    <a href="" class="icon"><i class="fa fa-instagram"></i></a>
                    <a href="" class="icon"><i class="fa fa-twitter"></i></a>
                    <a href="" class="icon"><i class="fa fa-pinterest"></i></a>
                    <a href="" class="icon"><i class="fa fa-youtube"></i></a>  
                  </div>
              </li>
            </ul>
          </div>  
        </div>

        <div class="row">
          <div class="twelve column">
            <ul class="footer-info footer-info-mid">
              <li>
                <h5>Make your own Tshirt</h5>
                <ul>
                  <li><a href="">Do it Now</a></li>
                  <li><a href="">How to</a></li>
                  <li><a href="">FAQs</a></li>
                </ul>
              </li>
              <li>
                <h5>Choose a Design</h5>
                <ul>
                  <li><a href="">All Categories</a></li>
                  <li><a href="">Featured</a></li>
                  <li><a href="">His</a></li>
                  <li><a href="">Hers</a></li>
                </ul>
              </li>
              <li>
                <h5>Signup and Sell T-Shirts</h5>
                <ul>
                  <li><a href="">Calling all designers & artists</a></li>
                  <li><a href="">Signup Now</a></li>
                  <li><a href="">FAQs</a></li>
                </ul>
              </li>
              <li>
                <h5>Visit Us</h5>
                <ul>
                  <li><a href="">Robina Store</a></li>
                  <li><a href="">Carindale Store</a></li>
                </ul>
              </li>
              <li>
                <h5>Order</h5>
                <ul>
                  <li><a href="">Bulk Order Contact us here</a></li>
                  <li><a href="">Login</a></li>
                  <li><a href="">Signup</a></li>
                </ul>
              </li>
                
            </ul>
          </div>
        </div>

        <div class="row">
          <div class="twelve column">
            <p>
              &copy; Copyright InstaThreds P/L 2014 | all rights reserved | <a href="">Privacy Policy</a> | <a href="">Terms of Use</a> | <a href="">Help</a>
            </p>
          </div>
        </div>

      </div>  
    </section>
    <!-- END FOOTER -->

    <!-- LOGIN/SINGUP MODAL -->
    <div class="modal fade" id="login-modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            
            <div class="tab-wrap">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" id="login-tab" role="tablist">
                <li class="active"><a href="#login" role="tab" data-toggle="tab">Login</a></li>
                <li><a href="#signup" role="tab" data-toggle="tab">Signup</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                
              <!-- LOGIN -->
                <div class="tab-pane active" id="login">
                  <form class="form-login">
                    <div class="form-group">
                      <input type="text" class="form-control username" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control password" placeholder="Password">
                    </div>
                    <div class="checkbox">
                        <input type="checkbox"> <span>Remember me</span>
                    </div>
                    <div class="lostpassword">
                      <a href="">Lost Password?</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group">
                      <button class="btn btn-primary login">LOGIN TO INSTATHREDS</button>  
                    </div>
                    <h3 class="divider-word"><span>OR</span></h3> 
                    <div class="form-group social-login">
                      <a href="" class="facebook-login"><img src="images/button-facebook-login.png"></a>
                      <a href="" class="instagram-login"><img src="images/button-instagram-signup.png"></a>
                    </div>
                  </form>
                </div>

                <!-- SIGNUP -->
                <div class="tab-pane" id="signup">
                  <form class="form-signup">
                    <div class="form-group">
                      <input type="text" class="form-control desired-username" placeholder="Desired Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control retype-password" placeholder="Retype Password">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control email" placeholder="Email">
                    </div>
                    <div class="form-group signup-text">
                      <p>By clicking “Sign Up Now”, you agree to our <a href="">Terms of Use</a><br>
                      We hate spam just as much as you do - <a href="">Privacy Policy</a></p>    
                    </div>
                    
                    <div class="clearfix"></div>
                    <div class="form-group">
                      <button class="btn btn-primary signup">SIGNUP NOW!</button>  
                    </div>
                    <h3 class="divider-word"><span>OR</span></h3> 
                    <div class="form-group social-login">
                      <a href="" class="facebook-login"><img src="images/button-facebook-login.png"></a>
                      <a href="" class="instagram-login"><img src="images/button-instagram-signup.png"></a>
                    </div>
                  </form>  
                </div>

              </div>
            </div>


          </div>
          
        </div>
      </div>
    </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/vendor/jquery-2.1.1.js"></script>
    <script src="js/bootstrap/dropdown.js"></script>
    <script src="js/bootstrap/modal.js"></script>
    <script src="js/bootstrap/tab.js"></script>
    <script src="js/vendor/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed 
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    -->

  </body>
</html>
