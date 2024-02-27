<?php

namespace App\Http\Controllers;

use App\Mail\demoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Mail from Vishwasigex',
            'body' => 'This is the for testing email using smtp',
        ];

        Mail::to('esmerkarizma00@vortexinternationalco.com')->send(new demoMail($mailData));

        dd('Send Mail Successfully.');
    }
}
