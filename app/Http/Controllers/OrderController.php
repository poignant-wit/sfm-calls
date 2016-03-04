<?php

namespace SFMCalls\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use SFMCalls\Http\Requests;
use SFMCalls\Models\Order;
use SFMCalls\Models\Action;

class OrderController extends Controller
{
    public function getCreateOrder()
    {
        return view('order.order');
    }


    public function postCreateOrder(Request $request)
    {

        $this->validate($request, [
            'customer' => 'required',
            'email' => 'required'
        ]);

        $order = new Order();
        $order->customer = $request->input('customer');
        $order->email = $request->input('email');
        if ($order->save()) {

            $action = new Action();
            $action->order_id = $order->id;
            $action->user_id = Auth::user()->id;
            $action->action_type_id = 1;
            $action->save();
        }

        return redirect()->back()->with('info', 'Заказ добавлен');
    }
}
