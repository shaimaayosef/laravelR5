<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class MyController extends Controller
{
    public function my_Data()
    {
        return view('test');
    }

    public function receiveData(Request $request){
        $fname = $request->fname;
        $lname = $request->lname;
        return view('test', compact('fname', 'lname'));
    }

    public function myval(){
        // session()->put('test', 'First Laravel session');
        session()->flash('test2', 'First Laravel session');
        return 'session created';
    }
    public function restoreVal(){
        return 'my session value is:'.session('test2') ;
    }
    public function deleteVal(){
        // session()->forget('test');
        session()->flush();
        return 'session removed';
    }
}
