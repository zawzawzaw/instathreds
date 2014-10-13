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
                  <li><a href="{{ URL::route('account-settings') }}"><i class="fa fa-caret-right"></i>Edit Profile</a></li>
                  <li><a href="{{ URL::route('account-portrait') }}"><i class="fa fa-caret-right"></i>Your Avatar</a></li>
                  <li><a href="{{ URL::route('account-order-history') }}"><i class="fa fa-caret-right"></i>Order History</a></li>
                  <li><a href="{{ URL::route('account-payment') }}" class="active"><i class="fa fa-caret-right"></i>Edit Payment Details</a></li>
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
                <h6>EDIT YOUR PAYMENT DETAILS</h6>
              </div>
              
              <h6>Personal Info</h6>
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
              

              <h6>Residential Address</h6>
              <div class="form-group">
                <label>*Address</label>
                <input type="text" class="text form-control" placeholder="Enter your address here">
              </div>
              <div class="form-group">
                <label>Line 2(optional)</label>
                <input type="text" class="text form-control" placeholder="Address line 2">
              </div>
              <div class="form-group">
                <label>*City or Town</label>
                <input type="text" class="text form-control" placeholder="Enter your City e.g. St. Kilda">
              </div>
              <div class="form-group">
                <label>*Zip or Postal Code</label>
                <input type="text" class="text form-control" placeholder="Postal Code e.g 3182">
              </div>
              <div class="form-group">
                <label>State or Province</label>
                <input type="text" class="text form-control" placeholder="e.g. VIC or NSW">
              </div>
              <div class="form-group">
                <label>Country</label>
                <div class="select-style">
                  <select>
                    <option value="Australia">Australia</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Myanmar">Myanmar</option>
                  </select>
                </div>
              </div>
              <br>
              <h6>Postal Address</h6>
              <div class="form-group">
                <input type="checkbox" id="postal-address" class="css-checkbox lrg" checked="checked"/>
                <label for="postal-address" name="postal-address" class="css-label lrg">Same as above</label>
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