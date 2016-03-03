<?php

namespace SFMCalls\Http\Controllers;

use Illuminate\Http\Request;

use SFMCalls\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {

       // \Session::set('sdfsdf', 'sdfsdf');
        return view('home');
    }
}
