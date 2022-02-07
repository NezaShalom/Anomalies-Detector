@extends('admin.layouts.master')

@section('content')
<div id="main-content">
    <div class="container-fluid mt-4">
      <div class="block-header">
        <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">                        
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Record Document</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin"><i class="fal fa-home"></i></a></li>                            
                        <li class="breadcrumb-item active">IremboGov</li>
                    </ul>
                </div>
            </div>
            
            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif
            <form action="{{route('dosiyes.store')}}" method="post">
                @csrf
                <div class="card col-md-8 mt-4">
                    <div class="header">
                        <h2>General Information</h2>
                    </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>file ID</label>
                                <input type="text" name="docid" class="form-control @error('docid') is-invalid @enderror">
                                @error('docid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Doc Owner</label>
                                <input type="text" name="docowner" class="form-control @error('docowner') is-invalid @enderror">
                                @error('docowner')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                            <label>file name</label>
                            <input type="text" name="docname" class="form-control @error('docname') is-invalid @enderror">
                            @error('docname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Choose file</label>
                            <input type="file" id="file" name="file" multiple>
                            @error('file')
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
    </div></div>
@endsection
