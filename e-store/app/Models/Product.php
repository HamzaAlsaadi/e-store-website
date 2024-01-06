<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'id', 'mobile_name', 'Cpu_spsecfication', 'Gpu_spsecfication', 'battery_spsecfication', 'Front_camera_spsecfication', 'Back_camera_spsecfication', 'Screen_Size', 'Type_of_charge', 'Price', 'imge', 'Company_id', 'category_id'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'Company_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function ratings()
    {
        return $this->hasMany(RateProduct::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'pivot_order_products')->withPivot('quantity');
    }
    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
