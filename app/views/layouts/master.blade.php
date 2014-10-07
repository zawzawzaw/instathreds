<!-- Stored in app/views/layouts/master.blade.php -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Instathreds</title>

    {{ HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css') }}
    {{ HTML::style('css/screen.css') }}

    <!-- TYPEKIT -->
    {{ HTML::script('//use.typekit.net/qcf3jnv.js') }}
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>  

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      {{ HTML::script('//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}
      {{ HTML::script('//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
    <![endif]-->
  </head>
 
  <body>
  
    <!-- PRELOADER -->
    <div id="preloader">
        <div id="status">
          {{ HTML::image('images/preloader.gif') }}
        </div>
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
          <a href="login-mobile.php">
            <!-- <img class="img-userprofile" src="images/userprofile.png" width="100"> -->
            {{ HTML::image('images/userprofile.png', '', array('class'=>'img-userprofile')) }}
            
            Login/Signup
          </a>  
        </li>
        <li>
          <div class="menu-cart-mobile">
            <a href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart"></i><span>2 items in your cart<span></a>
          </div>
        </li>
        <li><a href="{{ route('shirtbuilder.index') }}">Make Your Own</a></li>
        <li><a href="{{ route('store.featured') }}">Choose a Design</a></li>
        <li><a href="{{ route('store.index') }}">Stores</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">How To</a></li>
        <li><a href="#">Size Guide</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Bulk Orders</a></li>
        <li><a href="#">FAQs</a></li>
        <li><a href="#">Help</a></li>      
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
              <a href="https://facebook.com/instathreds" target="_blank" class="icon"><i class="fa fa-facebook"></i></a>
              <a href="https://instagram.com/instathreds" target="_blank" class="icon"><i class="fa fa-instagram"></i></a>
              <a href="https://twitter.com/instathreds" target="_blank" class="icon"><i class="fa fa-twitter"></i></a>
              <a href="https://pinterest.com/instathreds" target="_blank" class="icon"><i class="fa fa-pinterest"></i></a>
              <a href="#" class="icon"><i class="fa fa-youtube"></i></a>   
            </div>
        </div>      
      </div>
      <!-- end top header -->

      <!-- menu header -->
      <div class="header-main">
        <div class="container">
          <div class="logo">
            <a href="/">{{ HTML::image('images/logo-instathreds.png', 'logo') }}</a>
            <!-- <a href="http://www.instathredsdev.com"><img src="images/logo-instathreds.png" alt="Logo" /></a> -->
          </div>
          <div class="mobile-menu burger slide" id="navToggle"  >
            <a href="#"><i class="fa fa-bars"></i></a>
          </div>
          
          <div class="navigation-menu">
            <div class="menu-main">
              <ul>
                <li><a href="{{ route('shirtbuilder.index') }}">Make Your Own</a></li>
                <li><a href="{{ route('store.featured') }}">Choose a Design</a></li>
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
                <li><a href="{{ route('store.index') }}">Stores</a></li>
              </ul>
            </div>
            <div class="menu-cart">
              <a href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart"></i><span>{{ Cart::count() }}<span></a>
            </div>
            <div class="menu-login">
              <ul>
                @if(!Auth::check())   
                  <li><a href="#login-modal" class="user-account-btn login-link" data-id="login">Login</a></li>
                  <li><a href="#login-modal" class="user-account-btn signup-link" data-id="signup">Signup</a></li>
                  <!-- <li>{{ HTML::link('login', 'Login') }}</li>
                  <li>{{ HTML::link('register', 'Register') }}</li> -->
                @else
                  <li><a href="{{ route('login.destroy') }}">Logout</a></li>
                @endif
              </ul>  
            </div>
          </div>
        </div>
        
      </div>
      <!-- end menu header -->
    </section>  
    <!-- END HEADER -->
             
    <section class="main-content">
          @yield('content')
        
          @yield('slider')
          @yield('howitworks')
          @yield('recentdesigns')
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
                    <a href="https://facebook.com/instathreds" target="_blank" class="icon"><i class="fa fa-facebook"></i></a>
                    <a href="https://instagram.com/instathreds" target="_blank" class="icon"><i class="fa fa-instagram"></i></a>
                    <a href="https://twitter.com/instathreds" target="_blank" class="icon"><i class="fa fa-twitter"></i></a>
                    <a href="https://pinterest.com/instathreds" target="_blank" class="icon"><i class="fa fa-pinterest"></i></a>
                    <a href="#" class="icon"><i class="fa fa-youtube"></i></a>  
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
                  <li><a href="{{ route('shirtbuilder.index') }}">Do it Now</a></li>
                  <li><a href="#">How to</a></li>
                  <li><a href="#">FAQs</a></li>
                </ul>
              </li>
              <li>
                <h5>Choose a Design</h5>
                <ul>
                  <li><a href="{{ route('store.index') }}">All Categories</a></li>
                  <li><a href="{{ route('store.featured') }}">Featured</a></li>
                  <li><a href="#">His</a></li>
                  <li><a href="#">Hers</a></li>
                </ul>
              </li>
              <li>
                <h5>Signup and Sell T-Shirts</h5>
                <ul>
                  <li><a href="#">Calling all designers & artists</a></li>
                  <li><a href="#login-modal" class="user-account-btn" data-id="signup">Signup Now</a></li>
                  <li><a href="#">FAQs</a></li>
                </ul>
              </li>
              <li>
                <h5>Visit Us</h5>
                <ul>
                  <li><a href="#">Robina Store</a></li>
                  <li><a href="#">Carindale Store</a></li>
                </ul>
              </li>
              <li>
                <h5>Order</h5>
                <ul>
                  <li><a href="#">Bulk Order Contact us here</a></li>
                  <li><a href="#">Login</a></li>
                  <li><a href="#">Signup</a></li>
                </ul>
              </li>
                
            </ul>
          </div>
        </div>

        <div class="row">
          <div class="twelve column">
            <p>
              &copy; Copyright InstaThreds P/L 2014 | all rights reserved | <a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a> | <a href="#">Help</a>
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
                @if(Session::has('login_message'))
                    <p class="alert">{{ Session::get('login_message') }}</p>
                @endif
                @if(!isset($errors))
                <ul class="errors-list">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                {{ Form::open(array('url'=>'login', 'class'=>'form-login')) }}
                    <div class="form-group">
                      {{ Form::text('username', null, array('class'=>'form-control username', 'placeholder'=>'User Name')) }}
                    </div>
                    <div class="form-group">
                      {{ Form::password('password', array('class'=>'form-control password', 'placeholder'=>'Password')) }}
                    </div>
                    <div class="checkbox">
                      {{ Form::checkbox('rememberme') }}
                      <span>Remember me</span>
                    </div>
                    <div class="lostpassword">
                      <a href="#">Lost Password?</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="form-group">
                      {{ Form::button('LOGIN TO INSTATHREDS', array('class'=>'btn btn-primary login'))}}
                    </div>
            
                    <h3 class="divider-word"><span>OR</span></h3>

                    <div class="form-group social-login">
                      <a href="{{ route('fblogin.index') }}" class="facebook-login"><img src="{{ asset('images/button-facebook-login.png') }}"></a>
                      <a href="{{ route('instalogin.index') }}" class="instagram-login"><img src="{{ asset('images/button-instagram-signup.png') }}"></a>
                    </div>

                {{ Form::close() }}
                </div>

                <!-- SIGNUP -->
                <div class="tab-pane" id="signup">
                  @if(Session::has('register_message'))
                    <p class="alert">{{ Session::get('register_message') }}</p>
                  @endif
                  @if(!$errors->isEmpty())
                    <ul class="errors-list">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                  @endif
                  {{ Form::open(array('url'=>'register', 'class'=>'form-signup')) }}                  
                      <div class="form-group">
                      {{ Form::text('username', null, array('class'=>'form-control desired-username', 'placeholder'=>'Desired Username')) }}
                      </div>
                      <div class="form-group">
                      {{ Form::password('password', array('class'=>'form-control password','id'=>'password', 'placeholder'=>'Password')) }}
                      </div>
                      <div class="form-group">
                      {{ Form::password('password_confirmation', array('class'=>'form-control retype-password', 'placeholder'=>'Retype Password')) }}
                      </div>
                      <div class="form-group">
                      {{ Form::text('email', null, array('class'=>'form-control email', 'placeholder'=>'Email')) }}
                      </div>
                      <div class="form-group signup-text">
                        <p>By clicking “Sign Up Now”, you agree to our <a href="">Terms of Use</a><br>
                        We hate spam just as much as you do - <a href="">Privacy Policy</a></p>    
                      </div>
                      
                      <div class="clearfix"></div>
                      <div class="form-group">
                        {{ Form::button('SIGNUP NOW!', array('class'=>'btn btn-primary signup')) }}
                        <!-- <button class="btn btn-primary signup">SIGNUP NOW!</button>   -->
                      </div>
                      <h3 class="divider-word"><span>OR</span></h3> 
                      <div class="form-group social-login">
                        <a href="{{ route('fblogin.index') }}" class="facebook-login"><img src="{{ asset('images/button-facebook-login.png') }}"></a>
                        <a href="{{ route('instalogin.index') }}" class="instagram-login"><img src="{{ asset('images/button-instagram-signup.png') }}"></a>
                      </div>
                  {{ Form::close() }}
                </div>

              </div>
            </div>


          </div>
          
        </div>
      </div>
    </div>
    
    {{ HTML::script('js/vendor/jquery-2.1.1.js') }}
    {{ HTML::script('js/fabric.js') }}
    {{ HTML::script('js/bootstrap/dropdown.js') }}
    {{ HTML::script('js/bootstrap/modal.js') }}
    {{ HTML::script('js/bootstrap/tab.js') }}
    {{ HTML::script('js/vendor/owl.carousel.min.js') }}
    {{ HTML::script('//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js') }}
    {{ HTML::script('js/main.js') }}
    {{ HTML::script('js/shirt.js') }}



  </body>
</html>