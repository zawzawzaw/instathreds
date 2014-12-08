@section('sidebar')
 <h5 class="sidebartitle">Navigation</h5>
  <ul class="nav nav-pills nav-stacked nav-bracket">
    <li class=""><a href="{{ URL::to('admin') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
    <li><a href="{{ URL::to('admin/orders') }}"><span class="pull-right badge badge-success"></span><i class="fa fa-pencil-square-o"></i> <span>Orders</span></a></li>
    <li><a href="{{ URL::to('admin/users') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
    <li><a href="{{ URL::to('admin/designs') }}"><span class="pull-right badge badge-success"></span><i class="fa fa-photo"></i> <span>Designs in Store</span></a></li>
    <li><a href="{{ URL::to('admin/shirttypes') }}"><i class="fa fa-tasks"></i> <span>Shirt Types</span></a></li>
    <li><a href="{{ URL::to('admin/promocodes') }}"><i class="fa fa-book"></i> <span>Promo Codes</span></a></li>
    <li><a href="#"><i class="fa fa-suitcase"></i> <span>Stock Art</span></a></li>
    <li><a href="#"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>
    <li class="active"><a href="{{ URL::to('admin/sliders') }}"><i class="fa fa-sliders"></i> <span>Slider</span></a></li>
    <li><a href="{{ URL::to('admin/promos') }}"><i class="fa fa-usd"></i> <span>Promotions</span></a></li>
    <li><a href="#"><i class="fa fa-cogs"></i> <span>Settings</span></a></li>
  </ul>
@stop

@section('content')
<div class="mainpanel">

    <div class="headerbar">
      
        <a class="menutoggle"><i class="fa fa-bars"></i></a>

        <form class="searchform" action="index.html" method="post" style="display:none;">
        <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
        </form>
      
        <div class="header-right">
            <ul class="headermenu">
              <li>
                <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    {{ HTML::image('images/admin/photos/loggeduser.png', '') }}
                    {{ $username }}
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                    <li><a href="settings.html"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                    <li><a href="{{ route('login.destroy') }}"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
                  </ul>
                </div>
              </li>
            </ul>
        </div><!-- header-right -->
      
    </div><!-- headerbar -->

    <div class="pageheader">
      <h2><i class="fa fa-home"></i> Slider <span style="display:none;"></span></h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="{{ URL::to('admin') }}">Home</a></li>
          <li class="active">Slider</li>
        </ol>
      </div>
    </div>

    <div class="contentpanel">

        <div class="row">
            <div class="col-sm-12 col-md-12">
              
              <!-- Artworks -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title pull-left mr10">SLIDES</h4>
                    <a href="{{ route('admin.sliders.create') }}">
                        <button class="btn btn-sm btn-lightblue" style="vertical-align:middle;margin-top:-5px;" type="button">Add a Slide</button>
                    </a>
                  
                </div>
                <div class="panel-body">

                 
                    <div class="table-responsive">
                      <table class="table table-hover" id="slider-table">
                        <thead>
                           <tr>
                              <th>Slide Image</th>
                              <th>Link</th>
                           </tr>
                        </thead>
                        <tbody>
                            @foreach($sliders as $index => $slider)
                            @if($index%2==0)
                            <tr class="even">
                            @else
                            <tr class="odd">
                            @endif
                              <td><img src="/images/sliders/{{ $slider->image }}" width="175" height="75"></td>
                              <td>{{ $slider->link_1 }}</td>
                              <td class="table-action">
                                <a href="{{ '/admin/sliders/'.$slider->id.'/edit' }}"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0);" data-id="{{ $slider->id }}" class="delete-this-slider delete-row"><i class="fa fa-trash-o"></i></a>
                              </td>
                            </tr>
                            @endforeach                         
                        </tbody>
                     </table>
                    </div><!-- table-responsive -->
            
                </div><!-- panel-body -->
              </div><!-- panel -->
            </div>
        </div>
      
    </div><!-- contentpanel -->

</div><!-- mainpanel -->

{{ HTML::script('js/admin/jquery-1.10.2.min.js') }}
{{ HTML::script('js/admin/jquery-migrate-1.2.1.min.js') }}
{{ HTML::script('js/admin/bootstrap.min.js') }}
{{ HTML::script('js/admin/modernizr.min.js') }}
{{ HTML::script('js/admin/jquery.sparkline.min.js') }}
{{ HTML::script('js/admin/toggles.min.js') }}
{{ HTML::script('js/admin/retina.min.js') }}
{{ HTML::script('js/admin/jquery.cookies.js') }}
{{ HTML::script('js/admin/custom.js') }}

<script>
  jQuery(document).ready(function() {

    var makeRequest = function(Data, URL, Method) {

        var request = $.ajax({
            url: URL,
            type: Method,
            data: Data,
            dataType: "JSON",
            success: function(response) {
                // if success remove current item
                // console.log(response);
            },
            error: function( error ){
                // Log any error.
                console.log( "ERROR:", error );
            }
        });

        return request;
    };

    var deleterequest;
    jQuery('.delete-this-slider').on('click', function(e){
        
        e.preventDefault();
        
        // abort any pending request
        if (deleterequest) {
            deleterequest.abort();
        }

        if (confirm("Are you sure you want to delete this slider?")) {
            var slider_id = $(this).data('id');
            var requestJsonData = {};

            deleterequest = makeRequest(requestJsonData, "/admin/sliders/"+slider_id, "DELETE");

            deleterequest.done(function(){
                console.log(deleterequest);

                var result = jQuery.parseJSON(deleterequest.responseText);
            
                if(result) {
                    window.location.reload();
                }

            });   
        }
        return false;

    });
  });
</script>
@stop
@stop