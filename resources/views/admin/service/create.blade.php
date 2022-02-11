@extends('admin.layouts.master')

@section('content')

<div id="main-content">
    <div class="container-fluid mt-4">
        <div class="block-header">
          <div class="row">
                  <div class="col-lg-5 col-md-8 col-sm-12">                        
                      <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Record Services</h2>
                      <ul class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{route('admin')}}"><i class="fal fa-home"></i></a></li>                            
                          <li class="breadcrumb-item">Services</li>                            
                          <li class="breadcrumb-item active">Add Services</li>
                      </ul>
                  </div>
              </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-lg-12">
                    @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{Session::get('message')}}
                    </div>
                    @endif
                </div>
              
            <div class="row clearfix">
            <div class="col-lg-10 col-md-12 col-sm-12">                        
                <div class="card">
                <form action="{{route('services.store')}}" method="post">
                        @csrf
                <div class="body">
                    <div class="row clearfix">
                        <div class="header">
                            <h2><strong>Basic</strong> Information <small>Description text here...</small></h2>
                        </div>

                        <div class="col-lg-12 col-md-6">
                            <div class="form-group">
                            <label>Title</label>
                            <input type="text" placeholder="Title" class="form-control" name="title" value="{{old('title')}}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" value="{{old('description')}}"></textarea>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" class="form-control" name="price" value="{{old('price')}}">
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-md-12">
                            <select name="status" class="form-control show-tick">
                                <option value="">-- Status --</option>    
                                <option value="active" {{old('status')=='active' ? 'selected' : ''}}>Active</option>
                                <option value="inactive" {{old('status')=='inactive' ? 'selected' : ''}}>Inactive</option>
                            </select>
                        </div>
                        <button class="btn btn-primary" type="submit">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    </div></div></div>
@endsection
