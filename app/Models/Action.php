<?php
/**
 * Created by PhpStorm.
 * User: silafm
 * Date: 04.03.16
 * Time: 16:17
 */

namespace SFMCalls\Models;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{

    protected $table = 'actions';

    protected $fillable = [
        'order_id', 'user_id', 'action_type_id', 'comment'
    ];


}