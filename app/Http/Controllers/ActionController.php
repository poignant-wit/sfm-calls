<?php

namespace SFMCalls\Http\Controllers;

use Illuminate\Http\Request;
use SFMCalls\Http\Requests;
use SFMCalls\Models\Action;
use Auth;

class ActionController extends Controller
{
    public function postAddAction(Request $request){

         if (isset($request->rows)){
             foreach ($request->rows as $row){
                 $action = new Action();
                 $action->order_id = $row;
                 $action->action_type_id = $request->action_type_id;
                 $action->user_id = Auth::user()->id;
                 $action->save();
             }
         }

    }


}
