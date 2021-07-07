@extends('admin.master') 

@section('content')

  <div class="row">
      <div class="col-md-12">
          <h4>Category List</h4>
          <table class="table">
              <tr>
                  <th>Category</th>
                  <th>Image</th>
                  <th>Created By</th>
                  <th>Status</th>
              </tr>
              <tr>
                  <td>{{$show->category_name}}</td>
                  <td><img width="50px" height="50px" src="{{asset('admin/category/'.$show->image)}}"></td>
                  <td>{{$show->created_by}}</td>
                  <td>{{ $show->status==1 ? 'Active' : 'Inactive' }}</td>
             </tr>
          </table>
      </div>
  </div>
@endsection