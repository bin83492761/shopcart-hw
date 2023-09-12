<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderList extends Model
{
    protected $table = 'order_lists';
    
    protected $fillable = ['user_id','product_id','qty','order_id'];
}
