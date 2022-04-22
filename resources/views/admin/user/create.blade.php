@extends('admin.layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid mt-4">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">                        
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Record Employees</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin')}}"><i class="fal fa-home"></i></a></li>                            
                            <li class="breadcrumb-item">Employees</li>                            
                            <li class="breadcrumb-item active">Add Employees</li>
                        </ul>
                    </div>
                </div>
            </div>
                          
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{Session::get('message')}}
                        </div>
                    @endif

            <div class="row clearfix">
                <div class="col-lg-10 col-md-12 col-sm-12">                        
                    <div class="card">
                        {{-- @if (session('message'))
                            <div class="alert alert-success">{{session('message')}}</div>
                        @endif --}}
                    <form action="{{route('users.store')}}" method="POST">
                        @csrf
                        <div class="body">
                            <div class="row clearfix">
                                <div class="header">
                                    <h2><strong>Basic Information </strong><small>Description text here...</small></h2>
                                </div>
            
                                <div class="col-lg-10 col-md-6">
                                    <div class="form-group">
                                        <label>National ID</label>
                                        <input type="text" id="idnum" name="idnum" class="form-control @error('idnum') is-invalid @enderror" required maxlength="16" minlength="16" />
                                        @error('idnum')<p class='text-danger'>{{$message}}</p>@enderror
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <label>Mobile number </label>
                                        <input type="text" name="phone" class="form-control" required maxlength="10" minlength="10" />
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>Set-Password</label>
                                        <input type="password" name="password" class="form-control" required="">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>Role <span class="text-danger">*</span></label>
                                        <select class="form-control" name="role" required>
                                            <option>-- Role --</option>
                                            <option value="employee">Employee</option>
                                            <option value="modifier">Modifier</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                                              
                        <div class="col-lg-4 col-md-12">
                            <button class="btn btn-outline-info" type="submit">Create Employee</button>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
