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
                  <li><a href="{{ URL::route('account.settings') }}" class="active"><i class="fa fa-caret-right"></i>Edit Profile</a></li>
                  <li><a href="{{ URL::route('account.settings.portrait') }}"><i class="fa fa-caret-right"></i>Your Avatar</a></li>
                  <li><a href="{{ URL::route('account.settings.orderhistory') }}"><i class="fa fa-caret-right"></i>Order History</a></li>
                  <li><a href="{{ URL::route('account.settings.payment') }}"><i class="fa fa-caret-right"></i>Edit Payment Details</a></li>
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
                <h6>PROFILE</h6>
              </div>
              {{ Form::open(array('url'=>'account/settings', 'class'=>'account-form')) }}
              <div class="form-group">
                <label>First Name</label>
                <input type="text" name="first_name" class="text form-control" value="{{ $user->first_name }}" placeholder="Enter your first name">
              </div>
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="last_name" class="text form-control" value="{{ $user->last_name }}" placeholder="Enter your last name">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="text form-control" value="{{ $user->email }}" placeholder="Your email address">
              </div>
              <div class="form-group">
                <label>Short Bio</label>
                <textarea name="bio" class="textbio form-control" placeholder="Tell us something about youself">{{ $user->bio }}</textarea>
              </div>

              <div class="separator-line"></div>

              <div style="text-align:center;margin-bottom:20px;">
                <a href="javascript:void(0);" class="btn btn-primary save-profile continuepayment" >SAVE CHANGES</a>
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
      $('.save-profile').on('click', function(e){
        $(this).closest('form').submit();
      });
    });
    </script>

@stop