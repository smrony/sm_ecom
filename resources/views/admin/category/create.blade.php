@extends('admin.master')

@section('content')

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
    </div>
</div>
@endsection