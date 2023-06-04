<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\Product;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ViewErrorBag;
use Termwind\Components\Dd;

class AdminController extends Controller
{
    public function register()
    {

        return view('/admin/signup');
    }
    public function login()
    {

        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.home');
        }
        return view('/admin/login');
    }
    public function signup(Request $request)
    {
        dd($request->all());
        $request->validate([
            'name' => 'required|string|max:20',
            'email' => 'required|email|unique:admins,email',
            'phone' => 'required|numeric|min:10',
            'password' => 'required|alpha_num|min:6',
            'address' => 'required|string',
            'dob' => 'required|',
            'gender' => 'required|in:male,female,other',
            'hobby' => 'required|array',
        ]);
        
        try {
          
    
            $dataArray = [
                "name" => $request->name,
                "email" => $request->email,
                "phone" => $request->phone,
                "address" => $request->address,
                "password" => bcrypt($request->password),
                "dob" => $request->dob,
                "gender" => $request->gender,
                "hobby" => implode(',', $request->hobby),
            ];
    
            Admin::create($dataArray);
            return redirect()->route('admin.login');
        } catch (\Exception $e) {
            dd($e);
        }
    }
    


    public function signin(Request $request)
    {
        // dd($request->all());
        
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string|max:10|min:8',
        ]);
        
       
        // 
        $credentials = $request->only('email', 'password');
        
        // dd($credentials);

        if (Auth::guard('admin')->attempt($credentials)) 
        {
            // dd('fba');
            return redirect()->route('admin.home');
        }
        
        return redirect()->route('admin.login');
        
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function product(){
        $products=Product::all();
        return view('/admin/product', compact('products'));

    }
    public function user(){
        $users=User::all();
        return view('/admin/user', compact('users') );

    }
}
