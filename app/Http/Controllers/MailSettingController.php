<?php

namespace App\Http\Controllers;

use App\Mail\MailClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSettingController extends Controller
{
    public function sendForm(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        Mail::to('randomEmail@gmail.com')->send(new MailClass($name, $email, $message));
    }
}
