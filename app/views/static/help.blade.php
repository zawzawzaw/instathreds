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
            <a href="" class="banner-page"><img src="images/image-placeholder1.png" style="width:790px;height:150px;"></a>
            <h3>Header</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida justo eu porttitor vehicula. Fusce eu convallis magna. Nulla urna ligula, lobortis quis enim at, varius euismod sem. Donec mauris dui, suscipit a orci ac, ultrices hendrerit enim. Maecenas at dignissim diam, vitae congue augue. Curabitur semper non velit sit amet scelerisque. Etiam sed interdum lorem. Mauris semper ante non nisi laoreet tempus. Fusce sed porttitor erat. Praesent nisi nunc, viverra eu tempus sit amet, commodo sed arcu. Donec dictum, purus ac pulvinar pharetra, dolor magna aliquam urna, a varius mauris tellus non tellus. <a href="">Link colour</a></p>

            <h3 class="title orange">Header</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida justo eu porttitor vehicula. Fusce eu convallis magna. Nulla urna ligula, lobortis quis enim at, varius euismod sem. Donec mauris dui, suscipit a orci ac, ultrices hendrerit enim. Maecenas at dignissim diam, vitae congue augue. Curabitur semper non velit sit amet scelerisque. Etiam sed interdum lorem. Mauris semper ante non nisi laoreet tempus. Fusce sed porttitor erat. Praesent nisi nunc, viverra eu tempus sit amet, commodo sed arcu. Donec dictum, purus ac pulvinar pharetra, dolor magna aliquam urna, a varius mauris tellus non tellus. <a href="">Link colour</a></p>

            <h3 class="title green">Header</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida justo eu porttitor vehicula. Fusce eu convallis magna. Nulla urna ligula, lobortis quis enim at, varius euismod sem. Donec mauris dui, suscipit a orci ac, ultrices hendrerit enim. Maecenas at dignissim diam, vitae congue augue. Curabitur semper non velit sit amet scelerisque. Etiam sed interdum lorem. Mauris semper ante non nisi laoreet tempus. Fusce sed porttitor erat. Praesent nisi nunc, viverra eu tempus sit amet, commodo sed arcu. Donec dictum, purus ac pulvinar pharetra, dolor magna aliquam urna, a varius mauris tellus non tellus. <a href="">Link colour</a></p>



          </div>
        </div>
        </div>  

      </div>
    </section>
@stop