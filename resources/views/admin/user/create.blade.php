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

                    <form action="{{route('users.store')}}" method="POST">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="header">
                                        <h2>General Information</h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>National ID</label>
                                            <input type="text" id="idnum" name="idnum" class="form-control @error('idnum') is-invalid @enderror" required maxlength="16" minlength="16">
                                            @error('idnum')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Mobile number </label>
                                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" required maxlength="10" minlength="10">
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Set-Password</label>
                                            <input type="password" name="password" class="form-control" required="">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Role <span class="text-danger">*</span></label>
                                            <select class="form-control" name="role" required="">
                                                <option>-- Role --</option>
                                                <option value="employee">Employee</option>
                                                <option value="modifier">Modifier</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
