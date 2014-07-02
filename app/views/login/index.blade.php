@section('content')
{{ Form::open(array('url'=>'login', 'class'=>'form-signin')) }}
    <h2 class="form-signin-heading">Please Login</h2>

    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
 
    {{ Form::text('username', null, array('class'=>'input-block-level', 'placeholder'=>'User Name')) }}
    {{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}
 
    {{ Form::submit('Login', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}

<a href="{{ URL::to('/fblogin') }}"><img src="{{ asset('images/fb_login.png') }}" alt="login with Facebook"></a>
<a href="{{ URL::to('/instalogin') }}">Login with Instagram</a>
@stop