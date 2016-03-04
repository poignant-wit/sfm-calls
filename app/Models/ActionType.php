<?php


namespace SFMCalls\Models;

use Illuminate\Database\Eloquent\Model;

class ActionType extends Model
{
    protected $table = 'action_types';

    protected $fillable = [
        'action',
    ];
}

