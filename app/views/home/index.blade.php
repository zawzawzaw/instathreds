@section('content')
	<p class="welcome">{{{ !empty($username) ? 'Welcome ' . $username . ',' : '' }}}</p>
@stop