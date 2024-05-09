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
}
