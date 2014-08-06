@section('content')
<div class="row">
  <div class="col-sm-12 col-md-12">
    <div class="table-responsive">
      <table class="table table-hover" id="users-table">
        <thead>
           <tr>
              <th></th>
              <th>Name</th>
              <th>Username</th>
              <th>Email</th>
              <th></th>
           </tr>
        </thead>
        <tbody>
          @foreach ($users as $k => $user)
              @if($k % 2 == 0)
              <tr class="even">
              @else
              <tr class="odd">
              @endif
                <td>{{ HTML::image('images/admin/photos/loggeduser.png', $user->username, array('class'=>'profilepic'))  }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td class="table-action">
                  <a href="#"><i class="fa fa-pencil"></i></a>
                </td>
              </tr>
          @endforeach                
        </tbody>
     </table>
    </div><!-- table-responsive -->
    <div class="clearfix mb30"></div>

  </div>    
</div>
@stop