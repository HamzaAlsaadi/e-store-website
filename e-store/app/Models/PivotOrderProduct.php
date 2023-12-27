<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PivotOrderProduct extends Model
{
    use HasFactory;
    protected $fillable=['product_id','order_id','quantity'];

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }


}
