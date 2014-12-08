@section('content')

<!-- CONTENT -->
<section class="content error">
  <div class="container">
    <div class="panel cart-empty">
      {{ HTML::image('images/error404.png') }}
      <h6>OOPS</h6>
      <p>THAT PAGE DOESN’T EXIST<br>
TRY ONE OF THESE INSTEAD</p>
      <a href="" class="btn btn-primary">MAKE YOUR OWN</a> 
      <span class="or">OR</span> 
      <a href="" class="btn btn-primary">CHOOSE A DESIGN</a>
    </div>       
     
  </div>
</section>
<!-- END OF CART SECTION-->

@stop