@extends('admin.layouts.master')

@section('content')
<div id="main-content">
  <div class="col-md-12">
    <div class="card mt-4">
          <div class="header">
            <h2>All Employees</h2>
          </div>
          <div class="body">
            <div class="table-responsive">
              @if(Session::has('message'))
                  <div class="alert alert-success">
                      {{Session::get('message')}}
                  </div>
              @endif
           
            <table class="table center-aligned-table">
            <thead>
                <tr>
                    <th>User SN</th>
                    <th>name</th>
                    <th>national_id</th>
                    <th>Role</th>
                    <th>Mobile-number</th>
                    <th>Start Date</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>
            </thead>
           
            <tbody>
                @if(count($users)>0)
                @foreach($users as $key=>$user)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->national_id}}</td>
                    <td><span class="badge badge-success">{{$user->role_id->name??'' }}</span></td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->created_at}}</td>
       
                    <td>
                      <a href="{{route('users.edit',[$user->id])}}" class="btn btn-success btn-sm">Edit</a>
                    </td>
                  
                    <td>
                      <button class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#exampleModal{{$user->id}}">
                        <i class="fas fa-trash"></i>
                      </button>
                      
                          <!-- Modal -->
                      <div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <form action="{{route('users.destroy',[$user->id])}}" method="post">@csrf
                              {{method_field('DELETE')}}
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Delete Confirm</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Do you want to delete?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                          </div>
                        </form>
                        </div>
                      </div>
                      <!--Modal end-->                   
                    </td>                
                </tr>
                @endforeach
                @else
                <td>No users to display</td>
                @endif
               
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
