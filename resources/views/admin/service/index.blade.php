@extends('admin.layouts.master')

@section('content')
<div id="main-content">
  <div class="container-fluid">
    <div class="block-header">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Services
            <a class="btn btn-sm btn-outline-secondary" href="{{route('services.create')}}"><i class="fa fa-plus"></i> Create Service</a></h2>
              <ul class="breadcrumb float-left">
                <li class="breadcrumb-item"><a href="{{route('admin')}}"><i class="fa fa-home"></i></a></li>
                <li class="breadcrumb-item active">Service</li>
              </ul>
              <p class="float-right"> Total Services: {{\App\Service::count()}}</p>
          </div>
        </div>
    </div>

          <div class="row clearfix">
            <div class="col-lg-12">
              <div class="card">
                <div class="header">
                  <h2><strong>Service</strong></h2>
                </div>
              <div class="body">
                <div class="table-responsive">
              <table class="table center-aligned-table">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($services)>0)
                @foreach($services as $key=>$service)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$service->name}}</td>
                    <td>{{$service->description}}</td>
                    <td>{{number_format($service->price,2)}}</td>
                    <td>
                      <input type="checkbox" data-toggle="switchbutton" {{$service->status=='active' ? 'checked' : ''}} data-onlabel="Active" data-offlabel="Not Active" data-onstyle="success" data-size="sm" data-offstyle="danger" name="toggle" value={{$service->id}} data-toggle="tooltip">
                    </td>
                    <td>
                        <a href="{{route('services.edit',[$service->id])}}" class="btn btn-outline-warning btn-sm"><i class="fas fa-edit"></i></a></td>
                    </td>
                    <td>
                      <button class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#exampleModal{{$service->id}}">
                          <i class="fas fa-trash"></i>
                      </button>
                          
                            <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{$service->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <form action="{{route('services.destroy',[$service->id])}}" method="post">@csrf
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



<script>
  $('input[name=toogle]').change(function () {
    var mode=$(this).prop('checked'); 
    var id=$(this).val();
    $.ajax({
      url:"{{route('services.status')}}",
      type: "POST",
      data:{
        _token:'{{csrf_token()}}',
        mode:mode,
        id:id,
      },
      success:function (response) {
        if(response.status){
          alert(response.msg)
        } else {
          alert('Please try again');
        }
      }
    })
  });

</script>

@endsection
