<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;


class Admin extends User
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'address',
        'gender',
        'hobby',
        'dob',
    ];
}
