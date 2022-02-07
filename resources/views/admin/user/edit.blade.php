@extends('admin.layouts.master')

@section('content')
<div id="main-content">
    <div class="container-fluid mt-4">
      <div class="block-header">
        <div class="row justify-content-between">
            <div class="col-md-12">
                <nav>
                    <h5 class="mb-3" aria-current="page"><span class="badge badge-primary">Edit Employee details</span></h5>
                </nav>
            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif
        <form action="{{route('users.update',[$user->id])}}" method="post" enctype="multipart/form-data">@csrf
            {{method_field('PATCH')}}

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">General Information</div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Full name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required="" value="{{$user->name}}">
                         @error('name')
                            <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control " value="{{$user->address}}">
                    </div>
                    
                    <div class="form-group">
                        <label>Mobile number </label>
                        <input type="number" name="mobile_number" class="form-control " value="{{$user->mobile_number}}">
                    </div>
                    <div class="form-group">
                        <label>Department</label>
                         <select class="form-control" name="department_id" required="">
                            @foreach(App\Department::all() as $department)

                                <option value="{{$department->id}}"@if($user->department_id==$department->id)selected @endif>{{$department->name}}</option>
                            @endforeach   
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <input type="text" name="status" class="form-control @error('status') is-invalid @enderror" required="" value="{{$user->status}}">
                         @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" accept="image/*" >
                         @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Login Information</div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Email </label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required="" value="{{$user->email}}">
                         @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                                <select class="form-control" name="role" required="">
                                    <option value="">-- Role --</option>
                                    <option value="admin">admin</option>
                                    <option value="customer">customer</option>
                                    <option value="employee">employee</option>
                                    <option value="supervisor">supervisor</option>
                                </select>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <button class="btn btn-primary " type="submit">Update</button>
            </div>
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>
@endsection
