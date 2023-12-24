<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['mobile_name','Cpu_spsecfication','Gpu_spsecfication','battery_spsecfication','Front_camera_spsecfication','Back_camera_spsecfication','Screen_Size'
    ,'Type_of_charge','Price','imge','Company_id','category_id'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
}
}
