<?php

namespace App\Http\Controllers;

use App\Models\theatreModel;
use App\Models\User;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function indexPage(Request $theatreModel)
    {
        $info=theatreModel::get();
        return view('welcome',compact('info'));
    }

    public function addColumn(Request $request)
    {
        $info=theatreModel::create([
            'movieName'=>$request->movieName,
            'movieDescription'=>$request->movieDescription,
            'movieGener'=>$request->movieGener
        ]);

        return redirect()->back();
    }

    public function deleteFunction(theatreModel $theatreModel)
    {

        $theatreModel->delete();
        return redirect()->back();
    }

    public function editPage(Request $request,$id)
    {
        $info=theatreModel::where('id','=',$id)->first();
        
        return view('edit',['info'=>$info]);
    }

    public function editFunction(Request $request,$id)
    {
        $info=theatreModel::where('id','=',$id)->update([
            'movieName'=>$request->movieName,
            'movieDescription'=>$request->movieDescription,
            'movieGener'=>$request->movieGener
        ]);

        return redirect('/index');
    }
}
