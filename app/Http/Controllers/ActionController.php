<?php

namespace SFMCalls\Http\Controllers;

use Illuminate\Http\Request;
use SFMCalls\Http\Requests;
use SFMCalls\Models\Action;

class ActionController extends Controller
{
    public function postAddAction(Request $request){

        return $request->all();

    }
}
