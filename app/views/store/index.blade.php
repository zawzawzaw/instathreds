@section('content')
  <!-- BANNER/SLIDER -->
    <section class="slider">
      <div class="container">
        <div class="offers-bar">
          <h6><span>NEW FEATURED DESIGNS!</span> SHOP NOW</h6>  
        </div>
      </div>
    </section>
  <!-- END BANNER/SLIDER -->

	<!-- CONTENT -->
    <section class="content">
      <div class="container">
        <div class="row">
        <div class="three column">
          <div class="sidebar">  
            <h3>STORE</h3>
            <div class="separator-line"></div>
            <h5 class="title blue"><a href="{{ route('shirtbuilder.index') }}">MAKE YOUR OWN</a></h5>
            <div class="separator-line"></div>
            <div class="menu-sidebar">
              <h5>CHOOSE A DESIGN</h5>
              <ul>
                <li><a href="{{ route('store.index') }}">Trending</a></li>
                <li><a href="{{ route('store.featured') }}">Featured</a></li>
                <li><a href="#">His</a></li>
                <li><a href="#">Hers</a></li>
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
        </div>
        <div class="nine column">
          <div class="content-right">
            @if($products->count() > 0)
              <ul class="block-grid four-up mobile">
                @foreach($products as $product)
                  <li>
                    <a href="{{ URL::to('product', array(Product::slug($product->title), $product->id)) }}">{{ HTML::image('images/products/thumbs/'.$product->image) }}</a>
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