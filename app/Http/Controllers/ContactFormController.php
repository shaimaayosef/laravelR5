<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactClinte;
use App\Models\Client;

class ContactFormController extends Controller
{
    public function send(Request $request)
{
    $data=Client::findOrFail(1)->toArray();
    $data['theMessage']='hello dear';
    Mail::to($data['email'])->send( 
        new ContactClinte($data)
    );
    return "mail sent!";
}
}
