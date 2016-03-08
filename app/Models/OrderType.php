<?php
/**
 * Created by PhpStorm.
 * User: t
 * Date: 07.03.16
 * Time: 14:16
 */

namespace SFMCalls\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderType extends Model
{
    protected $table = 'order_types';

    protected $fillable = [
        'title',
    ];



}