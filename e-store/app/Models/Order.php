<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'count_of_items_in_order', 'total_price', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'pivot_order_products')->withPivot('quantity');
    }
    public function coupon()
    {
        return $this->belongsToMany(coupon::class);
    }
    public function orders()
    {
        return $this->hasMany(PivotOrderProduct::class);
    }
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
