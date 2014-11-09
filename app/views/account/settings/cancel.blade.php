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
                  <li><a href="{{ URL::route('account.settings.payment') }}"><i class="fa fa-caret-right"></i>Edit Payment Details</a></li>
                  <li><a href="{{ URL::route('account.settings.password') }}"><i class="fa fa-caret-right"></i>Change Password</a></li>
                  <li><a href="{{ URL::route('account.settings.cancel') }}" class="active"><i class="fa fa-caret-right"></i>Deactivate Account</a></li>
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
                <h6>We're sorry to see you go.</h6>
              </div>

              {{ Form::open(array('url' => 'account/settings/cancel', 'method' => 'post', 'class' => 'delete-account')) }}
              
                <p>If there's anything we can improve, we'd really appreciate your feedback:</p>
                <div class="form-group">
                  <textarea name="feedback_msg" id="textfeedback" class="form-control"></textarea>
                  <input type="hidden" name="delete" value="yes" />
                </div>

                <div class="separator-line"></div>

                <div style="text-align:center;margin-bottom:20px;">
                  <a href="javascript:void(0);" class="btn btn-danger cancel-account continuepayment">CANCEL MY ACCOUNT</a>
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
      $('.cancel-account').on('click', function(e){
          if (confirm("Are you sure you want to cancel your account?")) {
              $(this).closest('form').submit();
          }        
      });
    });
    </script>

@stop