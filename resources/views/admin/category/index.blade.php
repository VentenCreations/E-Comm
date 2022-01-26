@extends('layouts.admin')

@section('title')
    cat
@endsection

@section('content')
  <div class="card">
      <div class="card-header-primary">     
        <h4 class="text-white">Category Page</h4>
      </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
            <thead>
              <tbody>
                @foreach($category as $item)
                  <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>      
                    <td> 
                        <img src="{{ asset('assets/uploads/category/'.$item->image) }}" class="cate-image" alt="Image here">
                    </td>
                    <td>
                        <a href="{{ ('edit-category/'.$item->id) }}" rel="tooltip" title="Edit Category" class="btn btn-white btn-link btn-sm">
                          <i class="material-icons">edit</i>
                        </a>
                        <a href="{{ url('delete-category/'.$item->id) }}" rel="tooltip" title="Delete this Category" class="btn btn-white btn-link btn-sm">
                          <i class="material-icons">close</i>
                        </a>
                    </td>
                  </tr>
                @endforeach

                                    <!-- <button type="button" rel="tooltip" title="Edit Task" class="btn btn-white btn-link btn-sm">
                                      <i class="material-icons">edit</i>
                                    </button> -->


              </tbody> 
          </table>
  </div>

@endsection