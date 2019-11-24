<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;
class MailController extends Controller
{
    public function send()
    {
    	$to='antarnandy.2@gmail.com';
    	$sub='Contact Mail';
    	$msg='This is my First Mail';
    	Mail::to($to)->send( new SendMail($sub, $msg) );
    }
}
