<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register()
    {

        return view('user/signup');
    }
    public function login()
    {

        if (Auth::guard('user')->check()) {
            return redirect()->route('home');
        }
        return view('user/login');
    }
    public function signup(Request $request)
    {

        try {
            $request->validate(
                [
                    'name' => 'required|string|max:20',
                    'email' => 'required|email|unique:users,email',
                    'phone' => 'required|numeric|min:10',
                    'password' => 'required|alpha_num|min:6',
                    'address' => 'required|string',
                    'dob' => 'required|',
                    'gender' => 'required|in:male,female',
                    'hobby' => 'required|array',
                ]
            );
            $dataArray = array(
                "name" => $request->name,
                "email" => $request->email,
                "phone" => $request->phone,
                "address" => $request->address,
                "password" => bcrypt($request->password),
                "dob" => $request->dob,
                "gender" => $request->gender,
                "hobby" => json_encode($request->hobby),
            );
            

            $user = User::create($dataArray);
            return redirect(route('login'));
        } catch (\Exception $e) {
            dd($e);
        }
        // dd($request->all());



    }



    public function signin(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string|max:10|min:8',
        ]);

        // 

        $credentials = $request->only('email', 'password');
        if (Auth::guard('user')->attempt($credentials)) {
            return redirect()->route('home');
        }
        return redirect()->route('login');
    }
    public function logout()
    {
        Auth::guard('user')->logout();
        return redirect()->route('login');
    }
}
