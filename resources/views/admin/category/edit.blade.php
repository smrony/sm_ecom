@extends('admin.master')

@section('content')
<div class="page-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-green">
                <div class="panel-heading">Update Category</div>
                <div class="panel-body pan">
                   <form method="post" action="{{route('categories.update',$edit->id)}}" enctype="multipart/form-data">
                    @csrf
                    {{method_field('PATCH')}}
                        <div class="form-body pal">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="parent" class="control-label">Parent</label>
                                        <select class="form-control" name="parent" id="parent">
                                            <option>Parent Category</option>
                                            <option selected value="{{$edit->category_name}}">{{$edit->category_name}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category_name" class="control-label">Category Name</label>
                                        <div class="input-icon right"><i class="fa fa-user"></i>
                                            <input id="category_name" name="category_name" value="{{$edit->category_name}}" type="text" placeholder="" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image" class="control-label">image</label>
                                        <div class="input-icon right"><i class="fa fa-envelope"></i>
                                            <input id="image" name="image" type="file" placeholder="" class="form-control"/>
                                        </div>
                                        <img src="{{asset('admin/category/'.$edit->image)}}" alt="" width="100" height="100">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status" class="control-label">Status</label>
                                        <select class="form-control" name="status" id="status">
                                            @if($edit->status==1)
                                                <option value="1" selected>Active</option>
                                                <option value="0">Inactive</option>
                                            @else
                                                <option value="1">Active</option>
                                                <option value="0" selected>Inactive</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group"><label for="description" class="control-label">Description</label>
                                <textarea rows="5" name="description" id="description" class="form-control">{{$edit->description}}</textarea>
                            </div> 
                        </div>
                        <div class="form-actions text-right pal">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div> 
        </div> 
        
    </div>
</div>
@endsection