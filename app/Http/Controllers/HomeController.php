<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class HomeController extends Controller
{

    
    
    public function home()
    {
        $user=Auth::user();
        
        return view('/user/home');
    }

    public function shop()
    {


        $products=Product::all();
        $user=Auth::user();
        
        return view('/user/shop', compact('products'));

    }
    public function profile()
    {
        $user=Auth::user();
        
        return view('/user/profile', compact('user'));
    }
   

    
}
