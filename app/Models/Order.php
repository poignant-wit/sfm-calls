<?php

namespace SFMCalls\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use DB;
class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'customer', 'email'
    ];


    public function actions()
    {
    $this->hasMany('SFMCalls\Models\Action');
    }


    public static function getOrdersWithCustomerDetails($order_id){
        $result = DB::table('orders')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->where('orders.id', '=', $order_id)
            ->get();
        return $result;
    }



}
