<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
class MailController extends Controller
{
    public function index(){
        $mailData = [
            'title' => 'Mail from WEB',
            'body' => 'This is for testing email using smtp',
        ];

        Mail::to('ahujapuja55@gmail.com')->send(new DemoMail($mailData));
        dd('Email sent successfully');
    }
}
