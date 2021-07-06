@extends('admin.master') 

@section('content')

  <div class="row">
      <div class="col-md-12">
          <h4>Category List</h4>
          <table class="table">
              <tr>
                  <th>Sl</th>
                  <th>Category</th>
                  <th>Image</th>
                  <th>Created By</th>
                  <th>Status</th>
                  <th>Action</th>
              </tr>
             @foreach($list as $key=>$item)
              <tr>
                  <td>{{++$key}}</td>
                  <td>{{$item->category_name}}</td>
                  <td><img width="50px" height="50px" src="{{asset('admin/category/'.$item->image)}}"></td>
                  <td>{{$item->created_by}}</td>
                  <td>{{ $item->status==1 ? 'Active' : 'Inactive' }}</td>
                  <td>
                      <a class="btn btn-primary btn-sm" href="{{route('categories.show',$item->id)}}">View</a>
                      <a class="btn btn-warning btn-sm" href="{{route('categories.edit',$item->id)}}">Edit</a>
                 </td>
             </tr>
             @endforeach 
          </table>
      </div>
  </div>
@endsection