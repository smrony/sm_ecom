@extends('admin.master')

@section('content')
<div class="page-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-yellow">
                <div class="panel-heading">Category List</div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Created By</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $key=>$item)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$item->category_name}}</td>
                                <td><img width="50px" height="50px" src="{{asset('admin/category/'.$item->image)}}"></td>
                                <td>{{$item->created_by}}</td>
                                <td>{{ $item->status==1 ? 'Active' : 'Inactive' }}</td>
                                <!-- //ternary operator -->
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{route('categories.show',$item->id)}}">View</a>
                                    <a class="btn btn-warning btn-sm" href="{{route('categories.edit',$item->id)}}">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection