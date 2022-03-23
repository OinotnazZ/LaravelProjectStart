<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function index()
    {
        $helloWorld = 'Hello World António';


        return view('hello_world.index', ['helloWorld' => $helloWorld, 'banana' => 'cenoura']);
    }
}
