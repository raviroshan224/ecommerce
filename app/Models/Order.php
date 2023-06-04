<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        'product_id',
        'product_name',
        'product_rate',
        'total_price',
        'user_id',
        'user_phone',
        'user_address',

    ];
}
