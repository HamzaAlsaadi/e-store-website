<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Couppon extends Model
{
    use HasFactory;
    protected $fillable = ['code', 'discount', 'expiration_date'];
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
