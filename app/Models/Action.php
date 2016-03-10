<?php
/**
 * Created by PhpStorm.
 * User: silafm
 * Date: 04.03.16
 * Time: 16:17
 */

namespace SFMCalls\Models;
use Illuminate\Database\Eloquent\Model;
use DB;

class Action extends Model
{

    protected $table = 'actions';

    protected $fillable = [
        'order_id', 'user_id', 'action_type_id', 'comment'
    ];


    public static function getActionsWithTitlesAndUsers($order_id){
        $result = DB::table('actions')
            ->join('action_types', 'actions.action_type_id', '=', 'action_types.id')
            ->join('users', 'actions.user_id', '=', 'users.id')
            ->select('actions.*', 'action_types.action', 'action_types.type', 'users.username')
            ->where('actions.order_id', '=', $order_id)
            ->get();
        return $result;

    }

}