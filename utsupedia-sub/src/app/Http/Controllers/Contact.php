<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendContact;

class Contact extends Controller
{
    public function notification(Request $request)
    {
        $contactData = [
            'name' => $request->name,
            'content' => $request->content                   
        ];
        $name = $request->name;
        $content = $request->content;
        $to = 'utsupedia@gmail.com';
        Mail::to($to)->send(new SendContact($contactData));

        return view('contact.result', ['contactData' => $contactData]);
    }
}
