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
            <form action="{{route('services.update',[$service->id])}}" method="post">@csrf
                {{method_field('PATCH')}}
            <div class="card">
                <h2 class="header">Update Service</h2>

                <div class="card-body">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="{{old('title')}}">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" {{old('description')}}></textarea>
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
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mt-2">Update</button>
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
