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
    <section class="content contact">
      <div class="container">
        <div class="row">
          <div class="three column">
          <!-- sidebar contents -->
          <div class="sidebar">  
            <h3>CONTACT</h3>
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
            <!-- contact us details -->
            <div class="row">
              <div class="four column">
                <h5 class="title blue">CONTACT US</h5>
                <p><strong>p. 1300 469 453</strong></p>
                <div class="separator-line"></div>
                <h5>GENERAL INQUIRIES</h5>
                <p>e. <a href="mailto:info@instathreds.co">info@instathreds.co</a></p>
                <div class="separator-line"></div>
                <h5>PRINT / BULK ORDERS</h5>
                <p>e. <a href="mailto:print@instathreds.co">print@instathreds.co</a></p>
                <div class="separator-line"></div>
                <h5>STORE LOCATIONS</h5>
                <p>
                <a href="" class="storeloc-link">ROBINA</a><br>
                <a href="" class="storeloc-link">CARINDALE</a><br>
                <a href="" class="storeloc-link">GARDEN CITY</a>
                </p>
              </div>
              <div class="eight column">
                <div class="panel">
                  <h5>SEND US A MESSAGE</h5>
                  <div class="form-group">
                    <input type="text" name="" class="text form-control" value="" placeholder="First Name">
                  </div>
                  <div class="form-group">
                    <input type="text" name="" class="text form-control" placeholder="Last Name">
                  </div>
                  <div class="form-group">
                    <input type="text" name="" class="text form-control" placeholder="Business/Company Name">
                  </div>
                  <div class="form-group">
                    <input type="text" name="" class="text form-control" placeholder="Email Address">
                  </div>
                  <div class="form-group">
                    <input type="text" name="" class="text form-control" placeholder="Phone">
                  </div>
                  <div class="form-group">
                    <div class="select-style">
                      <select name="" id="enquiry-select">
                        <option value="">THIS ENQUIRY IS ABOUT</option>
                        <option value="">ROBINA STORE</option>
                        <option value="">CARINDALE STORE</option>
                        <option value="">GARDEN CITY STORE</option>
                        <option value="">BULK ORDERS</option>
                        <option value="">PRINT ORDERS</option>
                        <option value="">GENERAL ENQUIRY</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <textarea class="enquiry form-control">Your Message / Print / Bulk Order Details</textarea>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary">SUBMIT</button>
                  </div>
                  
              </div>

                  
                </div>
              </div>
                
            </div>
            <!-- end of contact us details -->
            
            <div class="separator-line"></div>

            <!-- map -->
            <div class="row">
              <div class="six column">
                <h5>ROBINA STORE MAP</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3520.2508904178153!2d153.38474499999998!3d-28.077889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x0f02a35bd722a180!2sRobina+Town+Centre!5e0!3m2!1sen!2sau!4v1414833404141" width="100%" height="100%" frameborder="0" style="border:0"></iframe>  
              </div>
              <div class="six column">
                <h5>CARINDALE STORE MAP</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3538.9141583860146!2d153.1021205!3d-27.503045!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915b8cbfba2ccf%3A0xf02a35bd7229de0!2sWestfield+Carindale!5e0!3m2!1sen!2sau!4v1414835222841" width="100%" height="100%" frameborder="0" style="border:0"></iframe> 
              </div>
            </div>
            <!-- end of map -->

            <!-- map -->
            <div class="row" style="margin-top:20px;">
              <div class="six column">
                <h5>GARDEN CITY</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3537.0812517030645!2d153.08112860000003!3d-27.5599887!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915b34f308c987%3A0xe8b2210987a33954!2sUpper+Mt+Gravatt+QLD+4122!5e0!3m2!1sen!2sau!4v1415500530459" width="100%" height="100%" frameborder="0" style="border:0"></iframe> 
              </div>
              <div class="six column">
              </div>
            </div>
            <!-- end of map -->
            


          </div>
        </div>
        </div>  

      </div>
    </section>
@stop