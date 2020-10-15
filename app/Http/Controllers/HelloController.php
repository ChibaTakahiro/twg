<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class HelloController extends Controller
{
    public function index(){
        $test = new Test;
        $test->testDBCheck();

        $hello = 'Hello,World!';
        $hello_array = ['Hello','こんにちは','にーはお'];

        return view('index',compact('hello','hello_array'));
    }
}
