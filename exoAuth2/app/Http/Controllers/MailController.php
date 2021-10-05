<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request){
        $contenuMail = [
            "name"=> $request->name,
            "email"=> $request->email,
            "phone"=> $request->phone,
            "message"=> $request->message,
        ];
        Mail::to("seifleboss@yo.com")->send(new Email($contenuMail));

        return "message envoyé";
    }
}
