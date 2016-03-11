<?php

namespace SFMCalls\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use SFMCalls\Http\Requests;
use Auth;
use SFMCalls\Models\ActionType;
use SFMCalls\Models\OrdersList;

class HomeController extends Controller
{
    public function index(Request $request)
    {


        if (Auth::check()){

            $orders = OrdersList::getOrdersToList();
//            $paginator = new Paginator($orders, 2);
            $current_page = ($request->page)? $request->page: 1;
            $rows_per_page = 20;
            $offset = ($current_page - 1)  * $rows_per_page;
            $orders_page = array_slice($orders, $offset, $rows_per_page);
            $paginator = new LengthAwarePaginator($orders_page, count($orders), $rows_per_page);
//            dd($paginator);

//
            $action_types = ActionType::all();
            unset($action_types[0]);
            return view('orders.table')
//                ->with('orders', $orders)
                ->with('paginator', $paginator)
                ->with('action_types', $action_types);





        }else{

        return view('welcome');
        }

    }
}
