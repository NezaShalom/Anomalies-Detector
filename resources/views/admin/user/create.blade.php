@extends('admin.layouts.master')

@section('content')
<div id="main-content">
    <div class="container-fluid mt-4">
      <div class="block-header">
        <div class="row justify-content-between">
            <div class="col-md-12">
                   
            <nav>
                <h5 class="mb-3" aria-current="page"><span class="badge badge-info">Register Employee</span></h5>
            </nav>
            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif
        <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">@csrf

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="header">
                    <h2>General Information</h2>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>First name</label>
                        <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" required="">
                         @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                    </div>
                    <div class="form-group">
                        <label>Last name</label>
                        <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" required="">
                         @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control ">
                    </div>
                    
                    <div class="form-group">
                        <label>Mobile number </label>
                        <input type="text" name="mobile_number" class="form-control ">
                    </div>
                    <div class="form-group">
                        <label>Department <span class="text-danger">*</span></label>
                         <select class="form-control" name="department_id" required="">
                            @foreach(App\Department::all() as $department)

                                <option value="{{$department->id}}">{{$department->name}}</option>
                            @endforeach 
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input  name="age" class="form-control @error('age') is-invalid @enderror" required="" id="datepicker">
                         @error('age')
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
                <div class="header">
                    <h2>Login Information</h2>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Email </label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required="" >
                         @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label>Role <span class="text-danger">*</span></label>
                        <select class="form-control" name="role" required="">
                            <option value="">-- Role --</option>
                            <option value="customer">Customer</option>
                            <option value="admin">Admin</option>
                            <option value="employee">Employee</option>
                            <option value="supervisor">Supervisor</option>
                        </select>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <button class="btn btn-primary " type="submit">Submit</button>
            </div>
        </div>
    </div>
</form>
</div>
        </div>
    </div>
</div>
</div>
@endsection
