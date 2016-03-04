<?php

namespace SFMCalls\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{
    use \Illuminate\Auth\Authenticatable;

    protected $table = 'users';

    protected $fillable = [
        'username', 'password'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];



}
