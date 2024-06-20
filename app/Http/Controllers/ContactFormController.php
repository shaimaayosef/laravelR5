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
    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message,
    ];
    Mail::to($data['email'])->send( 
        new ContactFormMail($data)
    );
    return "mail sent!";
}
}
