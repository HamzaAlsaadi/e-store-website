<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coupon_order extends Model
{
    use HasFactory;
    protected $table = 'coupon_orders';
    protected $fillable = ['couppon_id ', 'order_id '];
}
