@section('content')
<!-- CONTENT -->
<section class="content account">
	<div class="container">
	<h6 class="section-title"><i class="fa fa-user"></i>Reset Password</h6>
	<div class="row">
		<div class="six column">
			<div class="panel detail" style="min-height:0px!important;">
              	<div class="row">
	                <div class="col-md-12">
	                  	@if (Session::has('error'))
						 	<p style="margin: 10px 0px;color: red;">{{ Session::get('error') }}</p>
						@elseif (Session::has('status'))
						  	<p style="margin: 10px 0px;">{{ Session::get('status') }}</p>
						@endif
	                </div>
              	</div>
				<div class="row">
					<div class="col-md-12">
						<form action="{{ action('RemindersController@postRemind') }}" method="POST">
							<div class="form-group">
						    	<label for="email">Email</label>
						    	<input type="email" name="email" placeholder="Your email address">
						    </div>
						    <div class="form-group">
						    	<label for=""></label>
						    	<input type="submit" class="btn btn-primary" value="Send Reminder">
						    </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@stop