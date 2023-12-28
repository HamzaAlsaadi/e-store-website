<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressUser extends Model
{
    use HasFactory;
    protected $fillable=['name_of_the_city','number_of_the_street','number_of_building','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

}
