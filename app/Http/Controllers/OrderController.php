<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    public function Order($id)
    {
       
        $product = Product::find($id); 
        return view('/user/book', compact('product'));
    }
    public function ordernow(Request  $request){
        $user_id = Auth::id();
        // dd($request->all());
        
   
        // $product = Product::find($id); 
        // $user = User::find($id); 
      
        $order=[
              "product_id"=>$request->id,
            "product_name"=>$request->product_name,
            "product_rate"=>$request->product_rate,
            // "total_price"=>$request->total_price,
             "user_id"=>$request->user_id,
            "user_address"=>$request->user_address,
            "user_phone"=>$request->user_phone,
            
        ];
       

       

        Order::create($order);
        return redirect()->route('shop');
        

    }
}
