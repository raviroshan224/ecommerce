<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class ProductController extends Controller
{
    public function home()
    {
        // dd('dfd');
        return view('/admin/home');
    }
    public function create(Request $request)
    {


        $request->validate([
            'product_name' => 'required|string|max:20',
            'product_price' => 'required|numeric',
            'product_photo' => 'required',

        ]);


        //    dd($request->all());


        //     $dataArray = [

        //         "product_name" => $request->product_name,
        //         "product_price" => $request->product_price,
        //         "product_photo" => $request->file('product_photo')->store('public/storage'),



        //     ];

        //     Product::create($dataArray);
        //  return redirect()->back();


        
            $file = $request->file('product_photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/', $filename);

            $product=[
                "product_name" => $request->product_name,
                "product_price" => $request->product_price,
                "product_photo" => $filename,
            ];
           

           

            Product::create($product);

            return redirect()->back();
        
    }
}
