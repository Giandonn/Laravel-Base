<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index ()
    {
        return view ("Hello Index");
        $text = "Hello Cruel World";
        return view('hello_index', ['text' => $text]);
    }
}
