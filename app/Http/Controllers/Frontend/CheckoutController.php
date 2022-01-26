<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class CheckoutController extends Controller
{
    public function index()
    {  
       $old_cartitems = Cart::where('user_id', Auth::id())->get();
       foreach($old_cartitems as $item)
       {  
           if(!Product::where('id', $item->prod_id)->where('qty','>=',$item->prod_qty)->exists())
           {
                 $removeItem = Cart::where('user_id', Auth::id())->where('prod_id', $item->prod_id)->first();
                 $removeItem->delete();
           }
       }
       $cartitems = Cart::where('user_id', Auth::id())->get();
 
       return view('frontend.checkout', compact('cartitems'));
    }

    public function placeorder(Request $request)   
    {
        $order = new Order();
        $order->user_id = Auth::id();
        $order->fname = $request->input('fname');
        $order->lname = $request->input('lname');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->address = $request->input('address');
        $order->city = $request->input('city');
        $order->country = $request->input('country');

        // $order->payment_mode = $request->input('payment_mode');                 
        // $order->payment_id = $request->input('payment_id');

        // calculate total price
        $total = 0;
        $cartitems_total = Cart::where('user_id', Auth::id())->get();
        foreach($cartitems_total as $prod)
        {
            $total += $prod->products->selling_price;
        }

        $order->total_price = $total;

        $order->tracking_no = 'venten'.rand(1111,9999);
        $order->payment_mode = $request->input('payment_mode');
        $order->save();
        

        $cartitems = Cart::where('user_id', Auth::id())->get();
        foreach($cartitems as $item)
        {
            OrderItem::create([
                'order_id'=>  $order->id,
                'prod_id'=>  $item->prod_id,
                'qty'=>  $item->prod_qty,
                'price'=>  $item->products->selling_price,
            ]);

            $prod = Product::where('id', $item->prod_id)->first();
            $prod->qty = $prod->qty - $item->prod_qty;
            $prod->update();
        }

        if(Auth::user()->address == NULL )
        {   
            $user = User::where('id', Auth::id())->first();
            $user->name = $request->input('fname');
            $user->lname = $request->input('lname');
            $user->phone = $request->input('phone');
            $user->address = $request->input('address');
            $user->city = $request->input('city');
            $user->country = $request->input('country');
            $user->update();
        }

        $cartitems = Cart::where('user_id', Auth::id())->get();
        Cart::destroy($cartitems);
        return redirect('/')->with('status', "Order placed Successfully");
    }
  

    // mode of payment function
    public function paycheck(Request $request)
    {
        $cartitems = Cart::where('user_id', Auth::id())->get();
        $total_price = 0;
        foreach($cartitems as $item) 
        {
           $total_price += $item->products->selling_price * $item->prod_qty; 
        }
           $firstname = $request->input('firstname');
           $lastname = $request->input('lastname');
           $email = $request->input('email');
           $phone = $request->input('phone');
           $address = $request->input('address');
           $city = $request->input('city');
           $country = $request->input('country');

           return response()->json([
                'firstname'=> $firstname,
                'lastname'=> $lastname,
                'email'=> $email,
                'phone'=> $phone,
                'address'=> $address,
                'city'=> $city,
                'country'=> $country,
                'total_price'=> $total_price
                // 'payment_mode'=> $payment_mode

           ]);
        
    }
}
