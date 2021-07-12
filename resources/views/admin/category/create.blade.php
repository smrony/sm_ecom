@extends('admin.master')

@section('content')
<div class="page-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-green">
                <div class="panel-heading">Create Category</div>
                <div class="panel-body pan">
                    <form method="post" action="{{route('categories.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body pal">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                         <label for="parent" class="control-label">Parent</label>
                                        <select class="form-control" name="parent" id="parent">
                                            <option>Parent Category</option>
                                            @foreach($category as $items)
                                                <option value="{{$items->category_name}}">{{$items->category_name}}</option>
                                            @endforeach 
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category_name" class="control-label">Category Name</label>
                                        <div class="input-icon right"><i class="fa fa-user"></i><input id="category_name" name="category_name" type="text" placeholder="" class="form-control"/></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"><label for="image" class="control-label">image</label>

<<<<<<< HEAD
                                        <div class="input-icon right"><i class="fa fa-envelope"></i><input id="image" name="image" type="file" placeholder="" class="form-control"/></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status" class="control-label">Status</label>
                                        <select class="form-control" name="status" id="status">
                                            <option>Status</option> 
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option> 
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group"><label for="description" class="control-label">Description</label>
                                <textarea rows="5" name="description" id="description" class="form-control"></textarea>
                            </div> 
                        </div>
                        <div class="form-actions text-right pal">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div> 
        </div> 
        
=======
<div class="row">
    <div class="col-md-12">
        <h4>Create Category</h4>
{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
        <form method="post" action="{{route('categories.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-2">
                <label for="parent">Select Parent</label>
                <select id="parent" class="form-control" name="parent">
                    <option value="0">Select Parent</option>
                @foreach($category as $items)
                    <option value="{{$items->category_name}}">{{$items->category_name}}</option>
                @endforeach
                </select>
            </div>

            <div class="form-group mb-2">
                <label for="category_name">Category Name</label>
                <input type="text" id="category_name" class="form-control" name="category_name"
                    placeholder="Category Name" >
            </div>
            
            @if($errors->has('category_name'))
            <div class="alert alert-danger">
               {{$errors->first('category_name')}}
            </div>
            @endif



            <div class="form-group mb-2">
                <label for="image">Image</label>
                <input type="file" id="image" class="form-control" name="image" >
            </div>

            @if($errors->has('image'))
              <div class="alert alert-danger">
                 {{$errors->first('image')}}
              </div>
            @endif

            <div class="form-group mb-2">
                <label for="description">Description</label>
                <textarea id="description" class="form-control" name="description" cols="5" rows="5"
                    placeholder="Description"></textarea>
            </div>

            @if($errors->has('description'))
            <div class="alert alert-danger">
               {{$errors->first('description')}}
            </div>
            @endif

            <div class="form-group mb-2">
                <label for="status">Status</label>
                <select id="status" class="form-control" name="status">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success mb-2">Save Information</button>
        </form>
>>>>>>> 802aea7f6b6a5dec84791cb555ed6fa8fa99343a
    </div>
</div>
@endsection