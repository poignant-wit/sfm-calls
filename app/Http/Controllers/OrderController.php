<?php

namespace SFMCalls\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use SFMCalls\Models\Customer;
use SFMCalls\Http\Requests;
use SFMCalls\Models\Order;
use SFMCalls\Models\Action;
use SFMCalls\Models\OrderType;
use Symfony\Component\Finder\Iterator\CustomFilterIterator;

class OrderController extends Controller
{
    public function getCreateOrder()
    {
        $order_types = OrderType::all();
        return view('order.order')->with('order_types', $order_types);
    }


    public function postCreateOrder(Request $request)
    {
        $this->validate($request, [
            'customer-name' => 'required',
            'customer-email' => 'required',
        ]);

        $customer = new Customer();
        $customer->name = $request->input('customer-name');
        $customer->email = $request->input('customer-email');
        $customer->telephone = $request->input('customer-telephone');
        $customer->skype = $request->input('customer-skype');
        $customer->save();

        $order = new Order();
        $order->customer_id = $customer->id;
        $order->order_type_id = $request->input('order-type');
        if ($order->save()) {

            $action = new Action();
            $action->order_id = $order->id;
            $action->user_id = Auth::user()->id;
            $action->action_type_id = 1;
            $action->comment = $request->input('order-comment');
            $action->save();
        }
        return redirect()->back()->with('info', 'Заказ ' . sprintf("%06d", $order->id) . ' добавлен');
    }


    public function getOrderDetails($order_id){

//        $actions = Action::where('order_id','=', $order_id)->get();
        $actions = Action::getActionsWithTitlesAndUsers($order_id);
        $order = Order::getOrdersWithCustomerDetails($order_id);


       // dd($order);
        return view('orders.details')
            ->with('actions', $actions)
            ->with('order', $order)
            ->with('order_id', $order_id);
    }




}
