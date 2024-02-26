<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gsm extends Model
{
    use HasFactory;
    protected $fillable=['name_phone','image_phone','url_phone','networt_technology','demenation','weight'
    ,'build','size','display','resoulation','chiapest'
    ,'cpu','gpu','camera','camera_f','feature_camera'
    ,'video','sensores','battarey','charghing','usb','model'
    ,'price','colores','company_id'];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

}
