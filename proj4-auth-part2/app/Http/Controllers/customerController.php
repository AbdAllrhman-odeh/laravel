<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class customerController extends Controller
{
    public function index()
    {
        return view('welcome');    
    }

    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $info=customer::create([
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
            if(Auth::attempt($info))
            {
                return redirect()->to('/dashborad');
            }
            return redirect()->back();
        }
    }
}
