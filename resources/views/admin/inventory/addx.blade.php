

@extends('layouts.admin')

@section('content')
<title>

</title>
<style>
span{
  font-size:  0.875em;
}
</style>

  <div class="card">
      <div class="card-header-primary">
            <h4 class="text-white">Inventory Report</h4>
      </div>
      <div class="card-body">
          <form action="{{ url('insert-inventory') }}" method="POST" enctype="multipart/form-data">
                 @csrf
           <div class="row">

            <table class="table table-bordered">
              <thead class="">
                <tr>
                  <th><span>Date</span></th>
                  <th><span>Product Name</span></th>
                  <th><span>Product Sales</span></th>
                  <th><span>Today's Expenses</span></th>
                  <th><span>Cost of Expenses</span></th>
                  <th><span>Total Sales</span></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>
                    <input type="date" id="theDate" class="form-control" placeholder="Month Day Year" name="date" required autocomplete="name" autofocus>
                  </th>

                  <th>
                       <select style="font-size:12px; padding-left:25px; width:165px; border-radius: 10px;"
                       class="form-select" name="prod_id" required autocomplete="prod_id" autofocus>
                            <option value="">Select a Product</option>
                        @foreach ($products as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                       </select>
                  </th>

                  <!-- <th>
                    <input ype="text" class="form-control" placeholder="product name" name="product_name" required autocomplete="name" autofocus>
                  </th> -->
                    
                  <th>
                    <input type="number" class="form-control"  name="sales" required autocomplete="name" autofocus id="num1">
                  </th>
                    
                  <th>
                    <textarea type="text" class="form-control" name="expenses"  cols="30" rows="4"  required autocomplete="name" autofocus>
                    </textarea>
                  </th>

                  <th>
                    <input type="number" class="form-control"  name="amount" required autocomplete="name" autofocus id="num2">
                  </th>
                    

                  <th>
                    <input type="text"  id="answer" 
                    style="font-size:11px; padding-left:10px; width:165px; border-radius: 10px;" 
                    placeholder="Automatically calculated"  name="total_sales" readonly>
                  </th>

                </tr>
              </tbody>
            </table>
                    <div class="col-md-12">
                        <button type="submit" onclick="sum()" class="btn btn-ptimary btn-round float-right">Submit</button>
                    </div>
                </div>
          </form>


          <script>
                function sum ()
                {
                  var x = document.getElementById("num1").value;
                  var y = document.getElementById("num2").value;

                  var result = parseFloat(x) - parseFloat(y);

                  if(!isNaN(result))
                  {
                      document.getElementById("answer").value="Php  "+result;
                  }

                }
                // datepicker
                    var date = new Date();

                    var day = date.getDate();
                    var month = date.getMonth() + 1;
                    var year = date.getFullYear();

                    if (month < 10) month = "0" + month;
                    if (day < 10) day = "0" + day;

                    var today = year + "-" + month + "-" + day;
                    document.getElementById('theDate').value = today; 
          </script>

      </div>
</div>


@endsection 