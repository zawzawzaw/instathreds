<!-- Stored in app/views/layouts/master.blade.php -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{ csrf_token() }}" />

    <title>Instathreds</title>

    <link rel="shortcut icon" type="image/ico" href="https://instathreds.co/images/favicon.ico" />

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
              <input type="text" name="search" class="search-input" placeholder="SEARCH">
              <button class="button-search"><i class="fa fa-search"></i></button>
          </div>    
        </li>
        <li>
            @if(!Auth::check())
              <a href="#login-modal" class="user-account-btn login-link" data-id="login">Login</a>
            @else
              @if(!empty(Auth::user()->avatar))
                {{ HTML::image('images/avatars/'.Auth::user()->avatar, 'logo', array('width' => 70 , 'height' => 70)) }}
              @else
                {{ HTML::image('images/avatar.png', 'logo') }}
              @endif
            @endif
        </li>
        <li>
          <div class="menu-cart-mobile">
            <a href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart"></i><span>{{ Cart::count() }} items in your cart<span></a>
          </div>
        </li>
        <li><a href="{{ route('shirtbuilder.index') }}" target="_blank">Make Your Own</a></li>
        <li><a href="{{ route('store.index') }}">Choose a Design</a></li>
        <li><a href="{{ route('contact') }}">Stores</a></li>
        <li><a href="http://blog.instathreds.co">Blog</a></li>
        <li><a href="{{ URL::route('static.faq') }}">Calling All Designers</a></li>
        <li><a href="{{ route('static.ourstory') }}">Our Story</a></li>
        <li><a href="{{ route('contact') }}">Bulk Orders</a></li>
        <li><a href="{{ URL::route('static.faq') }}">FAQs</a></li>
      </ul>
    </nav>

        <!-- HEADER -->
    <section class="header">
      <!-- top header -->
      <div class="header-top">
        <div class="container">
            <div class="float-left">
              <h6 class="contact-us"><a href="{{ route('contact') }}">CONTACT US</a> PH. 1300 469 453</h6>
            </div>
            <div class="search-form">
                {{ Form::open(array('url' => 'search', 'method' => 'post', 'class' => 'search-product')) }}
                  <input type="text" name="search" class="search-input" placeholder="SEARCH">
                  <button type="submit" class="button-search"><i class="fa fa-search"></i></button>
                {{ Form::close() }}
            </div>
            <div class="social">
              <a href="https://facebook.com/instathreds" target="_blank" class="icon"><i class="fa fa-facebook"></i></a>
              <a href="https://instagram.com/instathreds" target="_blank" class="icon"><i class="fa fa-instagram"></i></a>
              <a href="https://twitter.com/instathreds" target="_blank" class="icon"><i class="fa fa-twitter"></i></a>
              <a href="https://pinterest.com/instathreds" target="_blank" class="icon"><i class="fa fa-pinterest"></i></a>
              <a href="https://www.youtube.com/instathredsco" target="_blank" class="icon"><i class="fa fa-youtube"></i></a>   
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
                <li><a href="{{ route('shirtbuilder.index') }}" target="_blank">Make Your Own</a></li>
                <li><a href="{{ route('store.index') }}">Choose a Design</a></li>
                <li><a href="{{ route('contact') }}">Stores</a></li>
                <li><a href="{{ route('static.ourstory') }}">Our Story</a></li>
                <li><a href="http://blog.instathreds.co">Blog</a></li>
              </ul>
            </div>
            <div class="menu-cart">
              <a href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart"></i><span>{{ Cart::count() }}<span></a>
            </div>
            @if(!Auth::check())
            <div class="menu-login">
              <ul>
                  <li><a href="#login-modal" class="user-account-btn login-link" data-id="login">Login</a></li>
                  <li><a href="#login-modal" class="user-account-btn signup-link" data-id="signup">Signup</a></li>
              </ul>  
            </div>
            @else
            <div class="menu-account-nav">
              <a href="" class="account-dropdown-trigger top-level">
                <div class="avatar-frame">
                  @if(!empty(Auth::user()->avatar))
                    {{ HTML::image('images/avatars/'.Auth::user()->avatar, 'logo', array('width' => 70 , 'height' => 70)) }}
                  @else
                    {{ HTML::image('images/avatar.png', 'logo') }}
                  @endif
                  <i class="fa fa-caret-down"></i>
                </div>
              </a>
              <div class="dropdown dropdown-target">
                <ul>
                <li><a href="{{ URL::route('account.settings') }}">Account Settings</a></li>
                <li><a href="{{ URL::route('account.settings.orderhistory') }}">Order History</a></li>
                <li class="nav-signout-link"><a href="{{ route('login.destroy') }}" rel="nofollow">Sign Out</a></li>
                </ul>
              </div>
            </div>
            @endif

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
                  <input type="text" name="subscribe_email" id="subscribe_email" class="text">
                  <button class="subscribe-btn btn btn-primary">JOIN</button>
                  
                </div>
                <div class="subscribe-rss">
                  <a href="{{ route('store.featured') }}" class="icon-other">
                  <i class="fa fa-rss"></i>SUBSCRIBE TO OUR BLOG</a>
                </div>
              </li>
              <li>
                <p style="font-weight:bold;">
                InstaThreds P/L<br>
                CONTACT US: 1300 469 453<br>
                PRINT ORDERS: <a href="mailto:print@instathreds.co">print@instathreds.co</a><br>
                GENERAL ENQUIRIES: <a href="mailto:info@instathreds.co">info@instathreds.co</a>
                </p>
              </li>
              <li>
                  <div class="social social-footer">
                    <a href="https://facebook.com/instathreds" target="_blank" class="icon"><i class="fa fa-facebook"></i></a>
                    <a href="https://instagram.com/instathreds" target="_blank" class="icon"><i class="fa fa-instagram"></i></a>
                    <a href="https://twitter.com/instathreds" target="_blank" class="icon"><i class="fa fa-twitter"></i></a>
                    <a href="https://pinterest.com/instathreds" target="_blank" class="icon"><i class="fa fa-pinterest"></i></a>
                    <a href="https://www.youtube.com/instathredsco" target="_blank" class="icon"><i class="fa fa-youtube"></i></a>  
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
                  <li><a href="{{ URL::route('static.faq') }}">FAQs</a></li>
                </ul>
              </li>
              <li>
                <h5>Choose a Design</h5>
                <ul>
                  <li><a href="{{ route('store.index') }}">All Categories</a></li>
                  <li><a href="{{ route('store.featured') }}">Featured</a></li>
                </ul>
              </li>
              <li>
                <h5>Signup and Sell T-Shirts</h5>
                <ul>
                  <li><a href="{{ URL::route('static.calldesigners') }}">Calling all designers & artists</a></li>
                  <li><a href="{{ URL::route('static.faq') }}">FAQs</a></li>
                </ul>
              </li>
              <li>
                <h5>Visit Us</h5>
                <ul>
                  <li><a href="{{ route('contact') }}">Robina Store</a></li>
                  <li><a href="{{ route('contact') }}">Carindale Store</a></li>
                  <li><a href="{{ route('contact') }}">Garden City Store</a></li>
                </ul>
              </li>
              <li>
                <h5>Order</h5>
                <ul>
                  <li><a href="{{ route('contact') }}">Bulk Orders</a></li>
                  <!-- <li><a href="#login-modal" class="user-account-btn login-link" data-id="login">Login</a></li>
                  <li><a href="#login-modal" class="user-account-btn signup-link" data-id="signup">Signup</a></li> -->
                </ul>
              </li>
                
            </ul>
          </div>
        </div>

        <div class="row">
          <div class="twelve column">
            <p>
              &copy; Copyright InstaThreds P/L 2014 | all rights reserved | <a href="{{ URL::route('static.privacy') }}">Privacy Policy</a> | <a href="{{ URL::route('static.terms') }}">Terms of Use</a> 
            </p>
          </div>
        </div>

        <div class="row">
          <div class="twelve column">
            <p>
              WEBSITE BY <a href="http://roundhouse.cc/" target="_blank">ROUNDHOUSE</a> 
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
                        <p>By clicking “Sign Up Now”, you agree to our <a href="{{ URL::route('static.terms') }}" target="_blank">Terms of Use</a><br>
                        We hate spam just as much as you do - <a href="{{ URL::route('static.privacy') }}" target="_blank">Privacy Policy</a></p>    
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

    <!-- STORE LOCATION MODAL -->
    <div class="modal fade" id="store-modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            
            <div class="wrap">
              <h3 style="text-align:center;">STORE LOCATIONS</h3>
              <div class="separator-line"></div>
              <table>
                <tr>
                  <td>
                    <h6>ROBINA</h6>
                    <p>Robina Town Centre<br>
                    Robina Town Centre Drive<br>
                    (off Robina Parkway)<br>
                    Robina QLD 4230</p>  
                  </td>
                  <td></td>
                  <td>
                    <h6>CARINDALE</h6>
                    <p>Westfield Carindale<br>
                    1151 Creek Road<br>
                    Carindale QLD 4152</p>  
                  </td>
                  <td></td>
                  <td>
                    <h6>WESTFIELD GARDEN CITY</h6>
                    <p>Cnr Logan & Kessels Rd<br>
                    Upper Mt Gravatt QLD 4122</p>  
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>
                    Mon: 9am – 5.30pm<br>
                    Tues: 9am – 5.30pm<br>
                    Wed: 9am – 5.30pm<br>
                    Thurs: 9am – 9pm<br>
                    Fri: 9am – 5.30pm<br>
                    Sat: 9am – 5.30pm<br>
                    Sun: 10am – 4pm</p>  
                  </td>
                  <td></td>
                  <td>
                    <p>
                      Mon: 9am – 5.30pm<br>
                      Tues: 9am – 5.30pm<br>
                      Wed: 9am – 5.30pm<br>
                      Thurs: 9am – 9pm<br>
                      Fri: 9am – 5.30pm<br>
                      Sat: 9am – 5pm<br>
                      Sun: 10am – 5pm
                    </p>
                  </td>
                  <td></td>
                  <td>
                    <p>
                      Mon: 9am – 5.30pm<br>
                      Tues: 9am – 5.30pm<br>
                      Wed: 9am – 5.30pm<br>
                      Thurs: 9am – 9pm<br>
                      Fri: 9am – 5.30pm<br>
                      Sat: 9am – 5pm<br>
                      Sun: 10am – 5pm
                    </p>
                  </td>
                </tr>
                <tr>
                  <td colspan="5">
                    <p>
                      e. <a href="mailto:info@instathreds.co">info@instathreds.co</a><br>
                      p. 1300 469 453
                    </p>  
                  </td>
                </tr>
              </table>

              
            </div>

          </div>
        </div>
      </div>
    </div>
    
    {{ HTML::script('js/vendor/jquery-2.1.1.js') }}
    {{ HTML::script('js/bootstrap/dropdown.js') }}
    {{ HTML::script('js/bootstrap/modal.js') }}
    {{ HTML::script('js/bootstrap/tab.js') }}
    {{ HTML::script('js/vendor/owl.carousel.min.js') }}
    {{ HTML::script('//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js') }}
    {{ HTML::script('js/PxLoader.js') }}
    {{ HTML::script('js/PxLoaderImage.js') }}
    {{ HTML::script('js/vendor/jquery.datatables.min.js') }}

    {{ HTML::script('js/admin/bootstrap-fileupload.min.js') }}
    {{ HTML::script('js/admin/jquery.uploadifive.min.js') }}

    {{ HTML::script('js/main.js') }}

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-57142573-1', 'auto');
      ga('send', 'pageview');
    </script>

  </body>
</html>