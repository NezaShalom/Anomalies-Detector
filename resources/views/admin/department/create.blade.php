@extends('admin.layouts.master')

@section('content')
<div id="main-content">
    <div class="container-fluid">
      <div class="block-header">
        <div class="row ">
            <div class="col-lg-8 col-md-10 col-sm-12">
            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif
            <form action="{{route('departments.store')}}" method="post">
                @csrf
                <div class="card">
                    <div class="header">
                        <h2>All Departments</h2>
                    </div>
                        <div class="card-body">
                            <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">
                            Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    </div>
@endsection
