<?php

namespace SFMCalls\Http\Controllers;

use Illuminate\Http\Request;

use SFMCalls\Http\Requests;
use Auth;
use SFMCalls\Models\ActionType;
use SFMCalls\Models\OrdersList;

class HomeController extends Controller
{
    public function index()
    {


        if (Auth::check()){

            $orders = OrdersList::getOrdersToList();
            $action_types = ActionType::all();
            unset($action_types[0]);
            return view('orders.table')
                ->with('orders', $orders)
                ->with('action_types', $action_types);





        }else{

        return view('welcome');
        }

    }
}
