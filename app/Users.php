<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table='users';
    protected $fillable =[
        'lastName',
        'firstName',
        'email',
        'password',
        'address',
        'phoneNo',
        'role'
    ];
}
