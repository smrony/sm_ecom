@extends('admin.master')

@section('content')



<div class="row">
    <div class="col-md-12">
        <h4>Update Category</h4>

        <form method="post" action="{{route('categories.update',$edit->id)}}" enctype="multipart/form-data">
            @csrf
            {{method_field('PATCH')}}
            <div class="form-group mb-2">
                <label for="parent">Select Parent</label>
                <select id="parent" class="form-control" name="parent">
                    <option value="0">{{$edit->category_name}}</option>
                </select>
            </div>

            <div class="form-group mb-2">
                <label for="category_name">Category Name</label>
                <input type="text" id="category_name" class="form-control" name="category_name"
                    placeholder="Category Name" value="{{$edit->category_name}} " required>
            </div>

            <div class="form-group mb-2">
                <label for="image">Image</label>
                <input type="file" id="image" class="form-control" name="image">
                <img src="{{asset('admin/category/'.$edit->image)}}" alt="" width="100" height="100">
            </div>

            <div class="form-group mb-2">
                <label for="description">Description</label>
                <textarea id="description" class="form-control" name="description" cols="5" rows="5"
                    placeholder="Description">{{$edit->description}}</textarea>
            </div>

            <div class="form-group mb-2">
                <label for="status">Status</label>
                <select id="status" class="form-control" name="status">
                    @if($edit->status==1)
                      <option value="1" selected>Active</option>
                     <option value="0">Inactive</option>
                     @else
                       <option value="1">Active</option>
                     <option value="0" selected>Inactive</option>
                    @endif
          
                </select>
            </div>

            <button type="submit" class="btn btn-success mb-2">Update Information</button>
        </form>
    </div>
</div>
@endsection