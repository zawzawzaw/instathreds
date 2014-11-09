@section('content')
  <style>
    #uploadifive-file_upload {
      position: absolute!important;
      width: 117px!important;
      height: 33px!important;
      top: 0px!important;
      left: 0px!important;
    }

    #uploadifive-file_upload-queue {
      display: none;
    }
  </style>
	 
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
                  <li><a href="{{ URL::route('account.settings.portrait') }}" class="active"><i class="fa fa-caret-right"></i>Your Avatar</a></li>
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
              <div class="heading">
                <h6>CHANGE YOUR AVATAR</h6>
              </div>
                <p>You can inject a little more personality into your profile and help people recognize you across Instathreds by uploading an avatar (an image, photo or other graphic icon of “you”).</p>
                <div class="profile-avatar">
                  @if(!empty($user->avatar))
                    {{ HTML::image('images/avatars/'.$user->avatar, 'logo', array('width' => 70 , 'height' => 70)) }}
                  @else
                    {{ HTML::image('images/avatar.png', 'logo') }}
                  @endif
                </div>

                <h6>UPLOAD A NEW AVATAR</h6>
                <p>You can upload almost any kind of image at any size — we'll take care of the resizing and cropping automatically.</p>
                {{ Form::open(array('url'=>'account/settings/portrait', 'class'=>'account-form')) }}
                <div class="form-group">
                  <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="input-append">
                      <div class="uneditable-input">
                        <i class="glyphicon glyphicon-file fileupload-exists"></i>
                        <span class="fileupload-preview">{{ $user->avatar }}</span>
                      </div>
                      <span class="btn btn-default btn-file">
                        <span class="fileupload-new">Select file</span>
                        <span class="fileupload-exists">Change</span>
                        <input id="file_upload" name="product_image" type="file" />
                        <input type="hidden" name="avatar" value="{{ $user->avatar }}" />
                      </span>
                      <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                    </div>
                  </div>
                </div>                

                <div class="separator-line"></div>

                <div style="text-align:center;margin-bottom:20px;">
                  <a href="javascript:void(0);" class="btn btn-primary save-avatar continuepayment" >UPLOAD AVATAR</a>
                </div>
              {{ Form::close() }}
            </div>

          
          </div>
          <!-- end of right column  -->
          
          
          
        </div>  
        
      </div>
    </section>
@stop