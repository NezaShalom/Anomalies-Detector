@extends('admin.layouts.master')

@section('content')
<div id="main-content">
  <div class="col-md-12">
    <div class="block-header">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Documents
          <a class="btn btn-sm btn-outline-secondary" href="{{route('dosiyes.create')}}"><i class="fa fa-plus"></i> Create Document</a></h2>
            <ul class="breadcrumb float-left">
              <li class="breadcrumb-item"><a href="{{route('admin')}}"><i class="fa fa-home"></i></a></li>
              <li class="breadcrumb-item active">Document</li>
            </ul>
        </div>
      </div>
  </div>
    <div class="card mt-2">
        <div class="header">
            <h2 class="mb-3">Documents collection</h2>
            <h5>Total number of docs: {{ $total_documents }}</h5>
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
                    <th>SN</th>
                    <th>Owner</th>
                    <th>Doc-ID</th>
                    <th>Doc Name</th>
                    <th>File</th>
                    <th>Edit</th>
                    <th>Delete</th>      
                </tr>
            </thead>
            <tbody>
              @if(!empty($documents))
              @php $i=1; @endphp
              @foreach ($documents as $key => $item)
              <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $item['docowner'] }}</td>
                <td>{{ $item['docid'] }}</td>
                <td>{{ $item['docname'] }}</td>
                <td>{{ $item['file'] }}</td>
                <td><a href="{{route('dosiyes.edit', [$key])}}" class="btn btn-success btn-sm">Edit</a></td>
                <td>
                  <button class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#exampleModal{{$key}}">
                    <i class="fas fa-trash"></i>
                </button>
                  <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{$key}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <form action="{{route('dosiyes.destroy', [$key])}}" method="post">@csrf
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
                    <td>No departments to display</td>
                    @endif
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
