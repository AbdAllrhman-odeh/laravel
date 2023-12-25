<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function registerPage()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $info=User::create([
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        return redirect()->back();
    }

    public function login(Request $request)
    {
        $validate=request()->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        if($validate)
        {
            $info=$request->only('email','password');

            // $email=$request->email;
            // $password=$request->password;

            // $info=['email'=>$email,'password'=>$password];
            // dd($info);
            if(Auth::attempt($info))
            {
                return redirect()->to('/dashbored');
            }
            return redirect()->back();
        }
    }
}
