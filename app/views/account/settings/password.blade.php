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
                  <li><a href="{{ URL::route('account.settings.password') }}" class="active"><i class="fa fa-caret-right"></i>Change Password</a></li>
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
                <h6>CHANGE YOUR PASSWORD</h6>
              </div>
                
              {{ Form::open(array('url'=>'account/settings/password', 'class'=>'password-change-form')) }}

                <h6>Give Yourself a Shiny New Password</h6>
                <div class="form-group">
                  <label>Current Password</label>
                  <input type="password" name="old_password" class="text form-control" placeholder="Enter your Current Password">
                </div>
                <div class="form-group">
                  <label>New Password</label>
                  <input type="password" name="new_password" class="text form-control" placeholder="Enter your New Password">
                </div>
                <div class="form-group">
                  <label>Retype Password</label>
                  <input type="password" name="new_password_confirmation" class="text form-control" placeholder="Retype your New Password">
                </div>
                

                <div class="separator-line"></div>

                <div style="text-align:center;margin-bottom:20px;">
                  <a href="javascript:void(0);" class="btn btn-primary changed-password continuepayment">CHANGE PASSWORD</a>
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
      $('.changed-password').on('click', function(e){
        $(this).closest('form').submit();
      });
    });
    </script>

@stop