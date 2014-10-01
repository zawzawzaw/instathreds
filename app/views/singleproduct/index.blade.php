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
    <section class="content detailed-product">
      <div class="container">
          <div class="row product-head">
            <div class="gender">
              <ul>
                <li><a href="" class="active">HIS</a></li>
                <li><a href="">HER</a></li>
            </div>
            <div class="breadcrumbs">
              <ul>
                <li><a href="">ALL CATEGORIES</a><span>></span></li>
                <li><a href="">PIXEL PEOPLE</a><span>></span></li>
                <li><a href="">BLOCKHEAD</a></li>
              </ul>  
            </div>
          </div>

          <div class="row product">
            <div class="left">
              <div class="front">
                {{ HTML::image('images/shirt-templates/mens-standard/mens-standard-front-shadow.png', 'a picture', array('class' => 'shadow')) }}
                <canvas id="canvas" width="263" height="327"></canvas>
                {{ HTML::image('images/shirt-templates/mens-standard/mens-standard-front-base.png', 'a picture', array('class' => 'base','id'=>'testimage')) }}
                {{ HTML::image('images/shirt-templates/mens-standard/mens-standard-front-background.jpg', 'a picture', array('class' => 'body')) }}
                <!-- <img src="images/image-placeholder1.png" style="width:620px;"> -->
                <!-- {{ HTML::image('images/products/thumbs/'.$product->image, '',array('style'=>'width:100%')) }} -->
              </div>
              <div class="back">
              	{{ HTML::image('images/products/thumbs/'.$product->image, '',array('style'=>'width:100%')) }}
              </div>
            </div>
            <div class="right">
              <h6 class="product-title">{{ $product->title }}</h6>
              <div class="shirt-type">
                <a data-toggle="dropdown" class="dropdown-toggle shirt-type" href="#">Shirt Type <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="">Round-Neck</a></li>
                  <li><a href="">V-Neck</a></li>
                  <li><a href="">Crew Neck</a></li>
                  <li><a href="">Round-Neck</a></li>
                </ul>
              </div>
              
              <div class="shirt-size">
                <a href="" class="active">S</a>
                <a href="">M</a>
                <a href="">L</a>
                <a href="">XL</a>
                <a href="">2XL</a>
              </div>
              <div class="shirt-color">
                <h6>Select a colour</h6>
                <ul class="color-list">
                  <li><span class="color-option" id="black" data-color="#000000"></span></li>
                  <li><span class="color-option" id="pink" data-color="#e83fd4"></span></li>
                </ul>  
              </div>
              <div class="shirt-view">
                <a href="" class="active">FRONT</a>
                <span>or</span>
                <a href="">BACK</a>
                <span class="price">${{ $product->price }}</span>
                  
              </div>
              <div class="shirt-quantity">
                  <input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">
                  <a href="#cart-modal" class="addtocart-link btn btn-primary">ADD TO CART</a>
              </div>
              <div class="share">
                <h6>SHARE WITH FRIENDS</h6>  
              </div>
            </div>
          </div>  
          
         
      </div>
    </section>

    <section class="more-products">
      <div class="container">
        <h6>ALSO IN PIXEL PEOPLE</h6>  
        <div class="more-products-slider owl-carousel">
          <div class="item">

            <a href="">{{ HTML::image('images/image-placeholder1.png', '',array('style'=>'width:198px;height:198px;')) }}</a>
            <a href="" class="product-title">Design title goes here</a>
          </div>
          <div class="item">
            <a href="">{{ HTML::image('images/image-placeholder1.png', '',array('style'=>'width:198px;height:198px;')) }}</a>
            <a href="" class="product-title">Design title goes here</a>
          </div>
          <div class="item">
            <a href="">{{ HTML::image('images/image-placeholder1.png', '',array('style'=>'width:198px;height:198px;')) }}</a>
            <a href="" class="product-title">Design title goes here</a>
          </div>
          <div class="item">
            <a href="">{{ HTML::image('images/image-placeholder1.png', '',array('style'=>'width:198px;height:198px;')) }}</a>
            <a href="" class="product-title">Design title goes here</a>
          </div>
          <div class="item">
            <a href="">{{ HTML::image('images/image-placeholder1.png', '',array('style'=>'width:198px;height:198px;')) }}</a>
            <a href="" class="product-title">Design title goes here</a>
          </div>
          <div class="item">
            <a href="">{{ HTML::image('images/image-placeholder1.png', '',array('style'=>'width:198px;height:198px;')) }}</a>
            <a href="" class="product-title">Design title goes here</a>
          </div>
          <div class="item">
            <a href="">{{ HTML::image('images/image-placeholder1.png', '',array('style'=>'width:198px;height:198px;')) }}</a>
            <a href="" class="product-title">Design title goes here</a>
          </div>
          <div class="item">
            <a href="">{{ HTML::image('images/image-placeholder1.png', '',array('style'=>'width:198px;height:198px;')) }}</a>
            <a href="" class="product-title">Design title goes here</a>
          </div>
          <div class="item">
            <a href="">{{ HTML::image('images/image-placeholder1.png', '',array('style'=>'width:198px;height:198px;')) }}</a>
            <a href="" class="product-title">Design title goes here</a>
          </div>
          <div class="item">
            <a href="">{{ HTML::image('images/image-placeholder1.png', '',array('style'=>'width:198px;height:198px;')) }}</a>
            <a href="" class="product-title">Design title goes here</a>
          </div>
            
        </div>
      </div>
    </section>
@stop