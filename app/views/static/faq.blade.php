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
            <h3>FAQ</h3>
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
            <h1>FAQ’s</h1>

            <p>At InstaThreds we make printing a custom t-shirt easy. Basically, you supply the image, text or make your own idea using the Shirt Builder and we print it to a shirt for you.</p>

            <p>
            <strong>Q. What resolution does the image have to be?</strong><br>
            <strong>A.</strong> We can print photos at any resolution, as t-shirts have a rough texture they tend to be quite forgiving to lower quality photos. That said, the higher the resolution, the clearer the image will be on the shirt. The maximum required quality is 29cm (width) x 41cm (height) at 300dot per inch. 
            </p>

            <p>
            <strong>Q. Can I add writing to my photo?</strong><br>
            <strong>A.</strong> Yes, using the Shirt Builder you have the option of adding text to an existing image. This includes putting a name or names on the back of a shirt or creating a text only shirt from scratch.</p>

            <p> 
            <strong>Q. What colour shirts can we print on?</strong>
            <strong>A.</strong> We can print onto any colour however sometimes we are out of stock in particular styles. In the event that happens one of our staff will call or email you to make other arrangements or organise a refund.</p>

            <p>
            <strong>Q. What file formats can I use to print?</strong><br>
            <strong>A.</strong> The file types acceptable in the Shirt Builder are PNG and JPG.</p>

            <p>
            <strong>Q. I have a JPEG image with a white background, will the background come up when its printed?</strong>
            <strong>A.</strong> Yes, the background of JPEG images will automatically come up when printed. We do offer the option of background removal however some images work better than others with this.</p>

            <p>
            <strong>Q. What is a white under base?</strong><br>
            <strong>A.</strong> Adding a white under base is a process where a white ink is printed on a dark shirt to allow a white surface for colours to be printed on the garment.</p>

            <p>
            <strong>Q. What material can we print on to?</strong><br>
            <strong>A.</strong> We print on 100% cotton garments however we can do things like logos and numbers onto polyester and other materials.</p>



          </div>
        </div>
        </div>  

      </div>
    </section>
@stop