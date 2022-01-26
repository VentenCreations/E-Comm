@extends('layouts.admin')

@section('title')
    cat
@endsection

@section('content')
<style>
span{
  font-size:  0.875em;
}
</style>
  <div class="card">
      <div class="card-header-primary">     
        <h4 class="text-white">Inventory Page</h4>
      </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th><span>Id</span></th>
                <th><span>Date</span></th>
                <th><span>Product Name</span></th>
                <th><span>Sales</span></th>
                <th><span>Expenses</span></th>
                <th><span>Cost of Expenses</span></th>
                <th><span>Total Sales</span></th>
                <th><span>Action</span></th>
              </tr>
            <thead>
              <tbody>
                @foreach($inventory as $item)
                  <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->date}}</td>
                    <td>{{ $item->product->name }}</td>   
                    <!-- <td>{{ $item->product_name }}</td>  -->
                    <td>{{ $item->sales }}</td>  
                    <td>
                      <textarea style="background-color: transparent;" cols="20" rows="4" readonly>
                        {{ $item->expenses }}
                      </textarea>
                    </td> 
                    <td>{{ $item->amount }}</td> 
                    <td>{{ $item->total_sales }}</td> 
                   
                    <td>
                        <a href="{{ ('edit-inventory/'.$item->id) }}" rel="tooltip" title="Edit" class="btn btn-white btn-link btn-sm">
                          <i class="material-icons">edit</i>
                        </a>
                        <a href="{{ url('delete-inventory/'.$item->id) }}" rel="tooltip" title="Delete" class="btn btn-white btn-link btn-sm">
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