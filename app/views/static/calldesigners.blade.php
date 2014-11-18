@section('content')
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
    <section class="content">
      <div class="container">
        <div class="row">
        <div class="three column">
          
          <!-- sidebar contents -->
          <div class="sidebar">  
            <h3>CALLING ALL DESIGNERS</h3>
            <div class="separator-line"></div>
            <div class="menu-sidebar">
              <ul>
                <li><a href="{{ route('contact') }}">Stores</a></li>
                <li><a href="{{ route('static.ourstory') }}">Our Story</a></li>
                <li><a href="http://blog.instathreds.co" target="_blank">Blog</a></li>
                <li><a href="{{ route('static.calldesigners') }}">Signup & Sell T-Shirts</a></li>
                <li><a href="{{ route('contact') }}">Bulk Orders</a></li>
                <li><a href="{{ route('static.faq') }}">FAQs</a></li>
                <li><a href="{{ route('contact') }}">Stores</a></li>
              </ul>
            </div>
            <div class="separator-line"></div>
            <h5 class="title blue"><a href="">MAKE YOUR OWN</a></h5>
            <div class="separator-line"></div>
            <div class="menu-sidebar">
              <h5>CHOOSE A DESIGN</h5>
              <ul>
                <li><a href="{{ route('store.index') }}">Trending</a></li>
                <li><a href="{{ route('store.featured') }}">Featured</a></li>
              </ul>
            </div>
            <div class="separator-line"></div>
            <div class="menu-sidebar">
              <ul>
                @foreach($categories as $category)
                  <li>
                    <a href="{{ URL::to('store', array($category->name, $category->id)) }}">
                      {{ $category->name }}
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
          <!-- end of sidebar contents -->

        </div>
        <div class="nine column">
          <div class="content-right">
            {{ HTML::image('images/image-calldesigners1.png') }}
            <div class="separator-line"></div>
            <div class="row">
              <div class="seven column">
                <table>
                <tr>
                  <td>{{ HTML::image('images/image-calldesigners2.png') }}</td>
                  <td>{{ HTML::image('images/image-calldesigners3.png') }}</td>
                </tr>
                </table>
              </div>  
              <div class="five column">
                <div class="panel betaprogram">
                  <h5>JOIN THE BETA PROGRAM</h5>
                  <div class="form-group">
                    <input type="text" name="subscriber_name" id="subscriber_name" placeholder="Name">    
                  </div>
                  <div class="form-group">
                    <input type="text" name="subscriber_email" id="subscriber_email" placeholder="Email Address">    
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary subscribe-designer-btn">SIGN UP</button>
                  </div> 
                </div>
                <p class="notify-text">AND WE WILL NOTIFY YOU OF YOUR<br>IMPENDING FAME AND FORTUNE</p>
                {{ HTML::image('images/image-calldesigners4.png', '', array('class' => 'notify-icons')) }} 
              </div>
            </div>
                      


          </div>
        </div>
        </div>  

      </div>
    </section>
@stop