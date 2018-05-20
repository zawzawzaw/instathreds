@section('content')
<!-- CONTENT -->
<section class="content account">
	<div class="container">
	<h6 class="section-title"><i class="fa fa-user"></i>Set New Password</h6>
	<div class="row">
		<div class="twelve column">
			<div class="panel detail">
              	<div class="row">
	                <div class="col-md-12">
	                  	@if (Session::has('error'))
					 		<p style="margin: 10px 0px;color: red;">{{ Session::get('error') }}</p>
						@elseif (Session::has('status'))
					  		<p style="margin: 10px 0px;">{{ Session::get('status') }}</p>
						@endif
	                </div>
              	</div>
				
			  	<form action="{{ action('RemindersController@postReset') }}" method="POST">
				    <input type="hidden" name="token" value="{{ $token }}">
				    <div class="form-group">
				    	<label for="email">Email</label>
				    	<input type="email" name="email" placeholder="Your email address">
				    </div>
				    <div class="form-group">
				    	<label for="password">Password</label>
				    	<input type="password" name="password">
				    </div>
				    <div class="form-group">
				    	<label for="password">Confirm Password</label>
				    	<input type="password" name="password_confirmation">
				    </div>
				    <div class="form-group">
				    	<label for=""></label>
				    	<input type="submit" class="btn btn-primary" value="Reset Password">
				    </div>
				</form>
            </div>			
		</div>
	</div>
	</div>
</section>
@stop