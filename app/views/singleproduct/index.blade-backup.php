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
              
              <!-- MENS-STANDARD -->
              <div class="shirt-template active" id="mens-standard">
                <div class="front">
                  {{ HTML::image('images/shirt-templates/mens-standard/mens-standard-front-shadow.png', '', array('class' => 'shadow')) }}
                  
                  {{ HTML::image('images/products/Game Over Space Scorpion.png', '', array('class' => 'product')) }}
                  <canvas class="canvas-product"></canvas>
                  <canvas class="canvas-productbig"></canvas>
                  <canvas class="canvas-front"></canvas>
                  {{ HTML::image('images/shirt-templates/mens-standard/mens-standard-front-base.png', '',  array('class' => 'base')) }}
                  {{ HTML::image('images/shirt-templates/mens-standard/mens-standard-front-background.png','', array('class' => 'body')) }}
                </div>
                <div class="back">
                  {{ HTML::image('images/shirt-templates/mens-standard/mens-standard-back-shadow.png', '', array('class' => 'shadow')) }}
                  {{ HTML::image('images/products/Game Over Space Scorpion.png', '', array('class' => 'product')) }}
                  <canvas class="canvas-product"></canvas>
                  <canvas class="canvas-productbig"></canvas>
                  <canvas class="canvas-back"></canvas>
                  {{ HTML::image('images/shirt-templates/mens-standard/mens-standard-back-base.png', '', array('class' => 'base')) }}
                  {{ HTML::image('images/shirt-templates/mens-standard/mens-standard-back-background.png','', array('class' => 'body')) }}
                </div>
              </div>

              <!-- MENS-STAPLE -->
              <div class="shirt-template" id="mens-staple">
                <div class="front">
                  {{ HTML::image('images/shirt-templates/mens-staple/mens-staple-front-shadow.png', '', array('class' => 'shadow')) }}
                  {{ HTML::image('images/products/Game Over Space Scorpion.png', '', array('class' => 'product')) }}
                  <canvas class="canvas-product"></canvas>
                  <canvas class="canvas-front" width="263" height="327"></canvas>
                  {{ HTML::image('images/shirt-templates/mens-staple/mens-staple-front-base.png', '',  array('class' => 'base')) }}
                  {{ HTML::image('images/shirt-templates/mens-staple/mens-staple-front-background.png','', array('class' => 'body')) }}
                </div>
                <div class="back">
                  {{ HTML::image('images/shirt-templates/mens-staple/mens-staple-back-shadow.png', '', array('class' => 'shadow')) }}
                  {{ HTML::image('images/products/Game Over Space Scorpion.png', '', array('class' => 'product')) }}
                  <canvas class="canvas-product"></canvas>
                  <canvas class="canvas-back" width="263" height="327"></canvas>
                  {{ HTML::image('images/shirt-templates/mens-staple/mens-staple-back-base.png', '', array('class' => 'base')) }}
                  {{ HTML::image('images/shirt-templates/mens-staple/mens-staple-back-background.png','', array('class' => 'body')) }}
                </div>
              </div>



            </div>
            <div class="right">
              <h6 class="product-title">{{ $product->title }}</h6>
              <div class="shirt-type">
                <a data-toggle="dropdown" class="dropdown-toggle shirt-type" href="#">Shirt Type <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="" data-shirt="mens-standard">Standard</a></li>
                  <li><a href="" data-shirt="mens-staple">Staple</a></li>
                  <li><a href="" data-shirt="mens-lowdown">Lowdown</a></li>
                  <li><a href="" data-shirt="mens-barnard">Barnard</a></li>
                  <li><a href="" data-shirt="mens-tall">Tall</a></li>
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
                <a href="" class="active front">FRONT</a>
                <span>or</span>
                <a href="" class="back">BACK</a>
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