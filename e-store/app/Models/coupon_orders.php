<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coupon_orders extends Model
{
    use HasFactory;
    protected $fillable = ['coupon_id', 'order_id'];

    public function coupon()
    {
        return $this->belongsTo(coupon::class, 'coupon_id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
