@section('content')
	<!-- BANNER/SLIDER -->
    <section class="slider">
      <div class="container">
        <div class="offers-bar">
          <a href="{{ route('store.featured') }}"><a href="{{ route('store.featured') }}"><h6><span>NEW FEATURED DESIGNS!</span> SHOP NOW</h6></a></a>
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
            <h3>OUR STORY</h3>
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
            {{ HTML::image('images/instathreds-story.png') }}


          </div>
        </div>
        </div>  

      </div>
    </section>
@stop