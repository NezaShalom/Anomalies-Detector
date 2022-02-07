@extends('admin.layouts.master')

@section('content')
<div id="main-content">
<div class="container-fluid mt-4">
    <div class="block-header">
    <div class="row justify-content-between">
        <div class="col-md-8">
            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif
            <form action="{{route('dosiyes.update', [$key])}}" method="POST">@csrf
                {{method_field('PATCH')}}
            <div class="card">
                <h2 class="header">Update Document</h2>

                <div class="card-body">
                    <div class="form-group">
                        <label>Doc ID</label>
                        <input type="text" name="docid" value="{{$editdata['docid']}}" class="form-control @error('docid') is-invalid @enderror">
                        @error('docid')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Doc Owner</label>
                        <input type="text" name="docowner" value="{{$editdata['docowner']}}" class="form-control @error('docowner') is-invalid @enderror">
                        @error('docowner')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="docname" value="{{$editdata['docname']}}" class="form-control @error('docname') is-invalid @enderror">
                        @error('docname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Choose a file</label>
                        <input type="file" name="file" value="{{$editdata['file']}}" class="form-control @error('file') is-invalid @enderror">
                        @error('file')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mt-2">Update</button>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div></div></div>
@endsection