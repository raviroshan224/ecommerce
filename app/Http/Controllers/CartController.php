<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // dd($request->all());

        $userId = Auth::id();

        $input = $request->all();
        $cart = Cart::create([
            'product_id' => $input['product-id'],
            'product_name' => $input['product-name'],
            'product_rate' => $input['product-rate'],
            'user_id' => $userId,
        ]);

        return redirect()->back();

    }
    public function order(Request $request)
    {
        // dd($request->all());

        $userId = Auth::id();

        $input = $request->all();
        $cart = Cart::create([
            'product_id' => $input['product-id'],
            'product_name' => $input['product-name'],
            'product_rate' => $input['product-rate'],
            'user_id' => $userId,
        ]);

        return redirect()->back();

    }


    public function viewcart()
    {

        $userID=Auth::id();
        $data['products'] = Cart::where('user_id', $userID)->get();

        return view('user/cart', $data);
    }

    public function destroy($id)
    {
    
        // dd($id);
        Cart::find($id)->delete();
        return redirect()->back();
    }

   

}
