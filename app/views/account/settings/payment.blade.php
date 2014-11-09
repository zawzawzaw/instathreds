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
                  <li><a href="{{ URL::route('account.settings') }}"><i class="fa fa-caret-right"></i>Edit Profile</a></li>
                  <li><a href="{{ URL::route('account.settings.portrait') }}"><i class="fa fa-caret-right"></i>Your Avatar</a></li>
                  <li><a href="{{ URL::route('account.settings.orderhistory') }}"><i class="fa fa-caret-right"></i>Order History</a></li>
                  <li><a href="{{ URL::route('account.settings.payment') }}" class="active"><i class="fa fa-caret-right"></i>Edit Payment Details</a></li>
                  <li><a href="{{ URL::route('account.settings.password') }}"><i class="fa fa-caret-right"></i>Change Password</a></li>
                  <li><a href="{{ URL::route('account.settings.cancel') }}"><i class="fa fa-caret-right"></i>Deactivate Account</a></li>
                </ul>
              </div>
            </div>
            <!-- end of order summary -->
            
            

          </div>
          <!-- end of left column  -->


          <!-- right column  -->
          <div class="eight column">
            <div class="panel detail">

              <div class="row">
                <div class="col-md-12">
                  @if (Session::has('message'))
                    <div class="message alert">
                      <p>{{ Session::get('message') }}</p>
                    </div>
                  @endif
                  @if(isset($errors) && !empty($errors))
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                  @endif
                </div>
              </div>


              <div class="heading">
                <h6>EDIT YOUR PAYMENT DETAILS</h6>
              </div>

              {{ Form::open(array('url'=>'account/settings/payment', 'class'=>'account-form')) }}
              
              <h6>Personal Info</h6>
              <div class="form-group">
                <label>First Name</label>
                <input type="text" name="first_name" class="text form-control" placeholder="Enter your first name" value="{{ $user->paymentdetails->first_name or '' }}">
              </div>
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="last_name" class="text form-control" placeholder="Enter your last name" value="{{ $user->paymentdetails->last_name or '' }}">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="text form-control" placeholder="Your email address" value="{{ $user->paymentdetails->email or '' }}">
              </div>
              

              <h6>Residential Address</h6>
              <div class="form-group">
                <label>*Address</label>
                <input type="text" name="address" class="text form-control" placeholder="Enter your address here" value="{{ $user->paymentdetails->address or '' }}">
              </div>
              <div class="form-group">
                <label>Line 2(optional)</label>
                <input type="text" name="address_2" class="text form-control" placeholder="Address line 2" value="{{ $user->paymentdetails->address_2 or '' }}">
              </div>
              <div class="form-group">
                <label>*City or Town</label>
                <input type="text" name="city" class="text form-control" placeholder="Enter your City e.g. St. Kilda" value="{{ $user->paymentdetails->city or '' }}">
              </div>
              <div class="form-group">
                <label>*Zip or Postal Code</label>
                <input type="text" name="post_zip_code" class="text form-control" placeholder="Postal Code e.g 3182" value="{{ $user->paymentdetails->post_zip_code or '' }}">
              </div>
              <div class="form-group">
                <label>State or Province</label>
                <input type="text" name="state" class="text form-control" placeholder="e.g. VIC or NSW" value="{{ $user->paymentdetails->state or '' }}">
              </div>
              <div class="form-group">
                <label>Country</label>
                <div class="select-style">
                  <select name="country">
                    <?php $country = isset($user->paymentdetails->country) ? $user->paymentdetails->country : ''; ?>
                    <option value="Australia" @if($country=="Australia") selected="selected" @endif>Australia</option>
                    <option value="Philippines"@if($country=="Philippines") selected="selected" @endif>Philippines</option>
                    <option value="Indonesia"@if($country=="Indonesia") selected="selected" @endif>Indonesia</option>
                    <option value="Singapore"@if($country=="Singapore") selected="selected" @endif>Singapore</option>
                    <option value="Myanmar"@if($country=="Myanmar") selected="selected" @endif>Myanmar</option>
                  </select>
                </div>
              </div>
              <br>
              <h6>Postal Address</h6>
              <div class="form-group">
                <input type="checkbox" name="postal_address" id="postal-address" class="css-checkbox lrg" checked="checked"/>
                <label for="postal-address" name="postal-address" class="css-label lrg">Same as above</label>
              </div>

              <div class="separator-line"></div>

              <div style="text-align:center;margin-bottom:20px;">
                <a href="javascript:void(0);" class="btn btn-primary save-paymentdetails continuepayment" >SAVE CHANGES</a>
              </div>

              {{ Form::close() }}

            </div>

          
          </div>
          <!-- end of right column  -->
          
          
          
        </div>  
        
      </div>
    </section>
    {{ HTML::script('js/admin/jquery-1.10.2.min.js') }}
    <script>
    $(document).ready(function(){
      $('.save-paymentdetails').on('click', function(e){
        $(this).closest('form').submit();
      });
    });
    </script>

@stop