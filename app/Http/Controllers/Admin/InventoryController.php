<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\file;
use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
   public function index()
   {  
      $inventory = Inventory::all();
      return view('admin.inventory.index', compact('inventory'));
   }

    public function addx()
    {  
       $products = Product::all();
       return view('admin.inventory.addx', compact('products'));
    }
     public function insert(Request $request)
     {
         $inventory = new Inventory();


      $inventory->prod_id = $request->input('prod_id');
      
       $inventory->date = $request->input('date');
      //  $inventory->product_name = $request->input('product_name');   
       $inventory->sales = $request->input('sales');
       $inventory->expenses = $request->input('expenses');
       $inventory->amount = $request->input('amount') ;
       $inventory->total_sales = $request->input('total_sales') ;
       $inventory->save();
       return redirect('/add-inventory')->with('status',"Inventory Report Added Successfully");
     }

     public function editx($id)
      {  
         $products = Product::all();
         $inventory = Inventory::find($id);
         return view('admin.inventory.edit', compact('inventory','products'));
      }
      
     public function update(Request $request, $id)
      {  
         $products = Product::all();
         $inventory = Inventory::find($id);

         $inventory->date = $request->input('date');
         // $inventory->product_name = $request->input('product_name');
         $inventory->sales = $request->input('sales');
         $inventory->expenses = $request->input('expenses');
         $inventory->amount = $request->input('amount') ;
         $inventory->total_sales = $request->input('total_sales') ;
         $inventory->save();
         return redirect('/inventory')->with('status',"Inventory Updated Successfully");
       
      }

      public function destroy($id)
        {
           $inventory = Inventory::find($id);
           $inventory->delete();
           return redirect('inventory');
        }
      
   }
