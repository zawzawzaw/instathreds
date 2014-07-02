<!-- Stored in app/views/layouts/master.blade.php -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Instathreds</title>
    {{ HTML::style('css/style.css') }}
  </head>
 
  <body>
  	<div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <ul class="nav">  
                    @if(!Auth::check())   
                      <li>{{ HTML::link('login', 'Login') }}</li>
                      <li>{{ HTML::link('register', 'Register') }}</li>
                    @else
                      <li><a href="{{ route('login.destroy') }}">Logout</a></li>
                    @endif
                </ul>  
            </div>
        </div>
    </div> 
             
 
    <div class="container">
        @if(Session::has('message'))
            <p class="alert">{{ Session::get('message') }}</p>
        @endif
 
        @yield('content')
    </div>
  </body>
</html>