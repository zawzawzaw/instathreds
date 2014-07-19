<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Instathreds</title>

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/screen.css">

    <!-- TYPEKIT -->
    <script type="text/javascript" src="//use.typekit.net/qcf3jnv.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>  

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- PRELOADER -->
    <div id="preloader">
        <div id="status"><img src="images/preloader.gif"></div>
    </div>

    <section class="login-section">
      <div class="tab-wrap">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="login-tab" role="tablist">
          <li class="active"><a href="#login" role="tab" data-toggle="tab">Login</a></li>
          <li><a href="#signup" role="tab" data-toggle="tab">Signup</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          
        <!-- LOGIN -->
          <div class="tab-pane active" id="login">
            <form class="form-login">
              <div class="form-group">
                <input type="text" class="form-control username" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="password" class="form-control password" placeholder="Password">
              </div>
              <div class="checkbox">
                  <input type="checkbox"> <span>Remember me</span>
              </div>
              <div class="lostpassword">
                <a href="">Lost Password?</a>
              </div>
              <div class="clearfix"></div>
              <div class="form-group">
                <button class="btn btn-primary login">LOGIN TO INSTATHREDS</button>  
              </div>
              <h3 class="divider-word"><span>OR</span></h3> 
              <div class="form-group social-login">
                <a href="" class="facebook-login"><img src="images/button-facebook-login.png"></a>
                <a href="" class="instagram-login"><img src="images/button-instagram-signup.png"></a>
              </div>
            </form>
          </div>

          <!-- SIGNUP -->
          <div class="tab-pane" id="signup">
            <form class="form-signup">
              <div class="form-group">
                <input type="text" class="form-control desired-username" placeholder="Desired Username">
              </div>
              <div class="form-group">
                <input type="password" class="form-control password" placeholder="Password">
              </div>
              <div class="form-group">
                <input type="text" class="form-control retype-password" placeholder="Retype Password">
              </div>
              <div class="form-group">
                <input type="text" class="form-control email" placeholder="Email">
              </div>
              <div class="form-group signup-text">
                <p>By clicking “Sign Up Now”,<br>you agree to our <a href="">Terms of Use</a><br>
                We hate spam just as much as you do - <a href="">Privacy Policy</a></p>    
              </div>
              
              <div class="clearfix"></div>
              <div class="form-group">
                <button class="btn btn-primary signup">SIGNUP NOW!</button>  
              </div>
              <h3 class="divider-word"><span>OR</span></h3> 
              <div class="form-group social-login">
                <a href="" class="facebook-login"><img src="images/button-facebook-login.png"></a>
                <a href="" class="instagram-login"><img src="images/button-instagram-signup.png"></a>
              </div>
            </form>  
          </div>

        </div>
      </div>
    </section>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="js/bootstrap/dropdown.js"></script>
    <script src="js/bootstrap/modal.js"></script>
    <script src="js/bootstrap/tab.js"></script>
    <script src="js/vendor/caroufredsel.js"></script>
    <script src="js/main.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed 
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    -->

  </body>
</html>
