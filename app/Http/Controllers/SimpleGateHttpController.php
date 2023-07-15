<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SimpleGateHttpController extends Controller
{
    public function getPost()
    {
        $respone = Http::get('https://jsonplaceholder.typicode.com/posts');

        dd($respone->headers());
    }
}
