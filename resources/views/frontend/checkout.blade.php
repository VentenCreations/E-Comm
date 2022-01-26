@extends('layouts.front')

@section('title')
    Checkout
@endsection

@section('content')
 <div class="container mt-5">
     <form action="{{ url('place-order') }}" method="POST">
         {{ csrf_field() }}
     <div class="row">
     <!-- @php $total_price = 0; @endphp -->
         <div class="col-md-7">
             <div class="card">
                 <div class="card-body">
                     <h6>Basic Details</h6>
                     <hr>
                     <div class="row checkout-form">
                         <div class="col-md-6">
                             <label for="">Firstname</label>
                             <input type="text" required class="form-control firstname" value="{{ Auth::user()->name }}" name="fname" placeholder="Enter First Name">
                             <span id="fname_error" class="text-danger"></span>
                         </div>
                         <div class="col-md-6">
                             <label for="">Last name</label>
                             <input type="text" required class="form-control lastname" value="{{ Auth::user()->lname }}" name="lname" placeholder="Enter Last Name">
                             <span id="lname_error" class="text-danger"></span>
                         </div>
                         <div class="col-md-6">
                             <label for="">Email</label>
                             <input type="text" required class="form-control email"value="{{ Auth::user()->email }}" name="email" placeholder="Email">
                             <span id="email_error" class="text-danger"></span>
                         </div>
                         <div class="col-md-6">
                             <label for="">Phone Number</label>
                             <input type="text" required class="form-control phone" value="{{ Auth::user()->phone }}" name="phone" placeholder="Enter Phone number">
                             <span id="phone_error" class="text-danger"></span>

                         </div>
                         <div class="col-md-6">
                             <label for="">Address</label>
                             <input type="text" required class="form-control address" value="{{ Auth::user()->address }}" name="address" placeholder="Address">
                             <span id="address_error" class="text-danger"></span>

                         </div>
                         <div class="col-md-6">
                             <label for="">City</label>
                             <input type="text" required class="form-control city" value="{{ Auth::user()->city }}" name="city" placeholder="City">
                             <span id="city_error" class="text-danger"></span>

                         </div>
                         <div class="col-md-6">
                             <label for="">Country</label>
                             <input type="text" required class="form-control country" value="{{ Auth::user()->country }}" name="country" placeholder="Country">
                             <span id="country_error" class="text-danger"></span>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-md-5">
             <div class="card">
                 <div class="card-body">
                    <h6>Order Details</h6>
                    <hr>
                    <table class="table table-striped table-bordered">
                        <tbody>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>Delivery Charge</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $total = 0; @endphp
                                @foreach ($cartitems as $item)
                                <tr>
                                    @php $total += ($item->products->selling_price * $item->prod_qty) @endphp
                                    <td>{{ $item->products->name }}</td>
                                    <td>{{ $item->prod_qty }}</td>
                                    <td>{{ $item->products->selling_price  }}</td>
                                <!-- {{ $item->products->name }} -->
                                </tr> 
                                @endforeach 
                            </tbody>
                      </table>
                      <h6 class="px-2">Total <span class="float-end"> Php{{ $total }} </span></h6>
                      <hr>
                      <!-- <input type="hidden" name="payment_mode" value-="COD"> -->
                      <input type="hidden" name="payment_mode" value="COD">
                      <button type="submit" class="btn btn-success  w-100">Place Order | COD</button> 
                       <!-- input class btn -->
                   
                 </div>
             </div>
         </div>
     </div> 
     </form>
 </div>

@endsection  