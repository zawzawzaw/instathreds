@section('content')
  <!-- BANNER/SLIDER -->
    <section class="slider">
      <div class="container">
        <div class="offers-bar">
<<<<<<< HEAD
          <a href="{{ route('store.featured') }}"><h6><span>NEW FEATURED DESIGNS!</span> SHOP NOW</h6></a>  
=======
          <a href="{{ route('store.featured') }}"><h6><span>NEW FEATURED DESIGNS!</span> SHOP NOW</h6></a>
>>>>>>> a9079855b8ab5907df35dc41e90b7f0a33701137
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
            <h3>SEARCH RESULT</h3>
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
            @if($products->count() > 0)
              <ul class="block-grid four-up mobile">
                @foreach($products as $product)
                  <li>
                    <a href="{{ URL::to('product', array(Product::slug($product->title), $product->id)) }}">{{ HTML::image('images/products/thumbs/'.$product->thumbnail_image) }}</a>
                    <a href="{{ URL::to('product', array(Product::slug($product->title), $product->id)) }}" class="title">{{ $product->title }}</a>
                  </li>
                @endforeach            
              </ul>
            @else 
              <p>No product found!</p>
            @endif

            {{ $products->links() }}

            <!-- <ul class="pagination pagination-sm pagination-split float-right">
              <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul> -->

          </div>
        </div>
        </div>  

      </div>
    </section>
@stop