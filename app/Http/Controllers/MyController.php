<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;
use App\Mail\ContactClinte;
use App\Models\Client;
use Illuminate\Support\Facades\Mail;

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
    public function sentClientMail(){
        $data=Client::findOrFail(1)->toArray();
        $data['theMessage']='hello dear';
        Mail::to($data['email'])->send( 
            new ContactClinte($data)
        );
        return "mail sent!";
    }
}
