<?php

namespace SFMCalls\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = [
        'name',
        'email',
        'telephone',
        'skype',
    ];


}
