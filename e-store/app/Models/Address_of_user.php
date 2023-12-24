<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address_of_user extends Model
{
    use HasFactory;
    protected $fillable=['name_of_the_city','number_of_the_street','number_of_building','User_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
