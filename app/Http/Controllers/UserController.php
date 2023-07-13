<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function testMail()
    {
        $mail = 'zihad@myolbd.com';
        Mail::to($mail)->send(new TestMail);

        dd('Mail Send Successfully !!');
    }
}
