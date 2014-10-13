@section('content')
	 
  <!-- CONTENT -->
    <section class="content account">
      <div class="container">
        <h6 class="section-title"><i class="fa fa-user"></i>YOUR ACCOUNT</h6>
        <div class="row">
          
          <!-- left column  -->
          <div class="four column">
            <!-- order summary -->
            <div class="panel account-settings">
              <div class="heading">
                <h6>ACCOUNT SETTINGS</h6>
              </div>
              <div class="menu-account">
                <ul>
                  <li><a href="{{ URL::route('account-settings') }}" class="active"><i class="fa fa-caret-right"></i>Edit Profile</a></li>
                  <li><a href="{{ URL::route('account-portrait') }}"><i class="fa fa-caret-right"></i>Your Avatar</a></li>
                  <li><a href="{{ URL::route('account-order-history') }}"><i class="fa fa-caret-right"></i>Order History</a></li>
                  <li><a href="{{ URL::route('account-payment') }}"><i class="fa fa-caret-right"></i>Edit Payment Details</a></li>
                  <li><a href="{{ URL::route('account-password') }}"><i class="fa fa-caret-right"></i>Change Password</a></li>
                  <li><a href="{{ URL::route('account-cancel') }}"><i class="fa fa-caret-right"></i>Deactivate Account</a></li>
                </ul>
              </div>
            </div>
            <!-- end of order summary -->
            
            

          </div>
          <!-- end of left column  -->


          <!-- right column  -->
          <div class="eight column">
            <div class="panel detail">
              <div class="heading">
                <h6>PROFILE</h6>
              </div>

              <div class="form-group">
                <label>First Name</label>
                <input type="text" class="text form-control" placeholder="Enter your first name">
              </div>
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="text form-control" placeholder="Enter your last name">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="text form-control" placeholder="Your email address">
              </div>
              <div class="form-group">
                <label>Short Bio</label>
                <textarea class="textbio form-control" placeholder="Tell us something about youself"></textarea>
              </div>

              <div class="separator-line"></div>

              <div style="text-align:center;margin-bottom:20px;">
                <a href="" class="btn btn-primary continuepayment" >SAVE CHANGES</a>
              </div>
            </div>

          
          </div>
          <!-- end of right column  -->
          
          
          
        </div>  
        
      </div>
    </section>


@stop