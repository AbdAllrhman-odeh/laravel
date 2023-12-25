<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index()
    {
        $info=student::get();
        return view('welcome',compact('info'));
    }

    public function store(Request $request)
    {        
        $info=student::create([
            'name'=>$request->name,
            'email'=>$request->email
        ]);

        return redirect()->back();
    }

    public function destroy(Request $request,$id)
    {
        $info=student::where('id','=',$id)->delete();
        
        return redirect()->back();
    }

    public function edit(Request $request,$id)
    {
        $info=student::where('id','=',$id)->first();
        return view('edit',compact('info'));
    }

    public function update(Request $request,$id)
    {
        $info=student::where('id','=',$id)->update([
            'name'=>$request->name,
            'email'=>$request->email
        ]);

        return redirect()->back();
    }

}
