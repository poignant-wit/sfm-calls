<?php

namespace SFMCalls\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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




}
