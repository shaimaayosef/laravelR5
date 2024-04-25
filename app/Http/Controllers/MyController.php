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
}
