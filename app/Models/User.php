<?php

namespace App\Models;

use MongoDB\Laravel\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $connection = 'mongodb';
    protected $collection = 'users';
    protected $primaryKey = '_id';

    protected $fillable = [
        'name',
        'email',
        'password',
        'empresa',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
